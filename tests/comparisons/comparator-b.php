<?php
/**
 * compare_per_file_with_accuracy_progress.php
 *
 * Demonstrates how to:
 * 1) Compare stub files from "php-stubs-generator" vs. "Stubz" (AI call #1).
 * 2) If differences are found, read real code, do a second AI call:
 *    "Which stub is more accurate and why?"
 * 3) [NEW] For each set of differences, do a *third* AI call:
 *    "How likely is it that these differences are purely style changes?"
 * 4) Save each result in a JSON cache immediately, INCLUDING the file paths
 *    so you can later see which files the AI results refer to.
 * 5) [NEW] In a *separate* JSON cache file (`.comparator-changes-cache.json`),
 *    keep only those differences whose "purely style" probability is <= 90.
 * 6) Produce a final Markdown.
 *
 * Usage:
 *   php compare_per_file_with_accuracy_progress.php
 */

// -----------------------------------------------------------------------------
// 1. CONFIG
// -----------------------------------------------------------------------------

$dirA         = __DIR__ . '/php-stubs-generator/woocommerce';      // "php-stubs-generator"
$dirB         = __DIR__ . '/../__snapshots__/plugins/woocommerce'; // "Stubz"
$realCodeBase = '/home/lucas/Downloads/stub/woocommerce';          // default path to the real code

$summaryOutputFile = __DIR__ . '/comparison_summary.md';
$cacheFile         = __DIR__ . '/.comparator-file-cache.json';

// [NEW] A separate cache for items that we consider *not* purely style changes
$changesCacheFile = __DIR__ . '/.comparator-changes-cache.json';

// Ollama / API
$ollamaEndpoint = 'http://localhost:11434/api/generate';
$ollamaModel    = 'qwen2.5-coder:14b';

// Safety threshold for file pair size
$maxFileSize = 10000; // ~10 KB

// (1) First call's JSON schema
$summarySchema    = [
	'type'       => 'object',
	'properties' => [
		'summary'     => [ 'type' => 'string' ],
		'differences' => [
			'type'  => 'array',
			'items' => [
				'type'       => 'object',
				'properties' => [
					'description' => [ 'type' => 'string' ],
				]
			]
		]
	],
	'required'   => [ 'summary', 'differences' ]
];
$summarySystemMsg = <<<SYS
You are an AI that compares two PHP stub files:
- One from "php-stubs-generator"
- One from "Stubz"

Identify missing classes, extends/implements differences, methods, constants, docblocks, etc.
Ignore reorder and purely code style differences. Return valid JSON like:
{
  "summary": "...",
  "differences": [ { "description":"..." }, ... ]
}
SYS;

// (2) Second call's JSON schema (accuracy)
$accuracySchema    = [
	'type'       => 'object',
	'properties' => [
		'judgment' => [ 'type' => 'string' ]
	],
	'required'   => [ 'judgment' ]
];
$accuracySystemMsg = <<<SYS
You are an AI that has the real source code plus the differences found between:
- A stub from "php-stubs-generator"
- A stub from "Stubz"

Decide which stub is more faithful to the real code and explain briefly. Return JSON:
{
  "judgment":"..."
}
SYS;

// [NEW] Third call's JSON schema (style-probability)
$styleSchema    = [
	'type'       => 'object',
	'properties' => [
		'probability' => [ 'type' => 'integer' ]
	],
	'required'   => [ 'probability' ]
];
$styleSystemMsg = <<<SYS
You are an AI that sees the differences found between two PHP stub files.
Return a single integer "probability" in the range 0-100,
representing how likely it is that these differences are purely code style or indentation changes.
Ignore reorder of methods if there's no actual semantic difference.
Output JSON only. Example:
{
  "probability": 75
}
SYS;


// -----------------------------------------------------------------------------
// 2. CACHE
// -----------------------------------------------------------------------------

function loadCache( string $path ): array {
	if ( ! file_exists( $path ) ) {
		return [];
	}
	$txt     = file_get_contents( $path );
	$decoded = json_decode( $txt, true );

	return is_array( $decoded ) ? $decoded : [];
}

function saveCache( string $path, array $cacheData ): void {
	$json = json_encode( $cacheData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
	file_put_contents( $path, $json );
}

// -----------------------------------------------------------------------------
// 3. HELPER FUNCTIONS
// -----------------------------------------------------------------------------

function scanPhpFiles( string $dir ): array {
	$out = [];
	if ( ! is_dir( $dir ) ) {
		return $out;
	}
	$it = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $dir ) );
	foreach ( $it as $f ) {
		if ( $f->isFile() && strtolower( $f->getExtension() ) === 'php' ) {
			$rel   = str_replace( $dir . DIRECTORY_SEPARATOR, '', $f->getPathname() );
			$out[] = $rel;
		}
	}
	sort( $out );

	return $out;
}

/**
 * Make a single Ollama call. Return the parsed JSON from the "response" field
 * or null on error.
 */
function callOllama(
	string $endpoint,
	string $model,
	string $prompt,
	array $schema,
	string $systemMsg
): ?array {
	$body = [
		'model'   => $model,
		'prompt'  => $prompt,
		'stream'  => false,
		'format'  => $schema,
		'system'  => $systemMsg,
		'options' => [
			'num_ctx' => 10000 // 10k
		],
	];

	$jsonBody = json_encode( $body );

	$ch = curl_init( $endpoint );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $jsonBody );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, [ 'Content-Type: application/json', 'Accept: application/json' ] );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

	$resp = curl_exec( $ch );
	if ( $resp === false ) {
		curl_close( $ch );

		return null;
	}
	curl_close( $ch );

	$decodedTop = json_decode( $resp, true );
	if ( ! isset( $decodedTop['response'] ) ) {
		return null;
	}
	$modelText = $decodedTop['response'];

	return json_decode( $modelText, true ) ?: null;
}

// -----------------------------------------------------------------------------
// 4. MAIN
// -----------------------------------------------------------------------------

$cache        = loadCache( $cacheFile );
$changesCache = loadCache( $changesCacheFile ); // [NEW] separate changes cache

$filesA = scanPhpFiles( $dirA );  // from php-stubs-generator
$filesB = scanPhpFiles( $dirB );  // from Stubz
$common = array_intersect( $filesA, $filesB );
$common = array_values( $common );

$total   = count( $common );
$current = 0;

$comparisons = [];

foreach ( $common as $relPath ) {
	$current ++;
	// Print progress
	echo "[{$current}/{$total}] Comparing: $relPath\n";

	$pathA = $dirA . '/' . $relPath;  // from "php-stubs-generator"
	$pathB = $dirB . '/' . $relPath;  // from "Stubz"

	$contA = file_exists( $pathA ) ? file_get_contents( $pathA ) : '';
	$contB = file_exists( $pathB ) ? file_get_contents( $pathB ) : '';

	// Skip identical
	if ( $contA === $contB ) {
		continue;
	}

	// Build cache key for FIRST call
	$hashA      = md5( $contA );
	$hashB      = md5( $contB );
	$summaryKey = "summary_{$hashA}_{$hashB}";

	// FIRST CALL
	if ( isset( $cache[ $summaryKey ] ) ) {
		$summaryResult = $cache[ $summaryKey ];
	} else {
		// If the combined file size is too big for one prompt, skip
		if ( strlen( $contA ) + strlen( $contB ) > $maxFileSize ) {
			$summaryResult = [
				'relPath'     => $relPath,
				'pathA'       => $pathA,
				'pathB'       => $pathB,
				'summary'     => "Files too large to compare in one prompt.",
				'differences' => []
			];
		} else {
			// Make the prompt
			$prompt = <<<EOT
Here is a stub file generated by "php-stubs-generator":

```
$contA
```

Here is a stub file generated by "Stubz":

```
$contB
```
EOT;

			$r = callOllama( $ollamaEndpoint, $ollamaModel, $prompt, $summarySchema, $summarySystemMsg );

			if ( isset( $r['summary'] ) && isset( $r['differences'] ) ) {
				// Incorporate the file path data for reference
				$r['relPath']  = $relPath;
				$r['pathA']    = $pathA;
				$r['pathB']    = $pathB;
				$summaryResult = $r;
			} else {
				$summaryResult = [
					'relPath'     => $relPath,
					'pathA'       => $pathA,
					'pathB'       => $pathB,
					'summary'     => "[AI error or invalid response on first call]",
					'differences' => []
				];
			}
		}
		// store in main cache
		$cache[ $summaryKey ] = $summaryResult;
		saveCache( $cacheFile, $cache );
	}

	$hasDiff = ! empty( $summaryResult['differences'] );

	if ( $hasDiff ) {
		// [NEW] We'll do a new call to see if these differences are purely style-based
		$diffJson   = json_encode( $summaryResult['differences'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
		$styleKey   = "style_{$hashA}_{$hashB}";
		$styleScore = null;

		if ( isset( $cache[ $styleKey ] ) ) {
			$styleResult = $cache[ $styleKey ];
			$styleScore  = $styleResult['probability'] ?? null;
		} else {
			// Make the style prompt
			$promptStyle = <<<EOT
Here are the differences found between the two stub files, in JSON format:

```
$diffJson
```

Ignoring reorders, indentation, or purely code style changes:
Estimate how likely it is that these differences are purely style changes. Return JSON:
{
  "probability": 0-100
}
EOT;

			$rStyle = callOllama(
				$ollamaEndpoint,
				$ollamaModel,
				$promptStyle,
				$styleSchema,
				$styleSystemMsg
			);

			if ( isset( $rStyle['probability'] ) ) {
				$rStyle['relPath']  = $relPath;
				$styleScore         = $rStyle['probability'];
				$cache[ $styleKey ] = $rStyle;
				saveCache( $cacheFile, $cache );
			}
		}

		// If style probability > 75%, skip storing in the changes cache
		if ( $styleScore !== null && $styleScore <= 75 ) {
			// Store in .comparator-changes-cache.json
			$changesCache[ $summaryKey ] = $summaryResult;
			saveCache( $changesCacheFile, $changesCache );
		}

		// [Optionally] STILL do your "which stub is more accurate" call if you like:
		$realPath = $realCodeBase . '/' . $relPath;
		if ( file_exists( $realPath ) ) {
			$realCont = file_get_contents( $realPath );

			$hashReal    = md5( $realCont );
			$accuracyKey = "accuracy_{$hashA}_{$hashB}_{$hashReal}";

			if ( ! isset( $cache[ $accuracyKey ] ) ) {
				// build second prompt
				$diffJson2 = json_encode( $summaryResult['differences'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );

				$prompt2 = <<<EOT
Differences found between stub from "php-stubs-generator" and stub from "Stubz" (in JSON):
```
$diffJson2
```

Here is the real code for reference:

```
$realCont
```

Which stub is more accurate to the real code, and why? Ignore indentation and purely style differences.
EOT;
				$r2      = callOllama( $ollamaEndpoint, $ollamaModel, $prompt2, $accuracySchema, $accuracySystemMsg );

				if ( isset( $r2['judgment'] ) ) {
					// Add path info
					$r2['relPath']         = $relPath;
					$r2['realPath']        = $realPath;
					$cache[ $accuracyKey ] = $r2;
					saveCache( $cacheFile, $cache );
				} else {
					$cache[ $accuracyKey ] = [
						'relPath'  => $relPath,
						'realPath' => $realPath,
						'judgment' => "[AI error or invalid response on second call]"
					];
					saveCache( $cacheFile, $cache );
				}
			}
		}
	}

	// We'll store final for building the markdown
	// but only if we found differences
	if ( $hasDiff ) {
		// Attempt to get the second call from the cache
		$realPath    = $realCodeBase . '/' . $relPath;
		$hashReal    = file_exists( $realPath ) ? md5( file_get_contents( $realPath ) ) : '';
		$accuracyKey = "accuracy_{$hashA}_{$hashB}_{$hashReal}";

		$accuracyResult = isset( $cache[ $accuracyKey ] )
			? $cache[ $accuracyKey ]
			: null;

		$comparisons[] = [
			'file'        => $relPath,
			'summary'     => $summaryResult['summary'],
			'differences' => $summaryResult['differences'],
			'judgment'    => $accuracyResult['judgment'] ?? ''
		];
	}
}

// 5) Build final Markdown
$md = "# Comparison of php-stubs-generator vs. Stubz\n\n";
$md .= "**Real codebase**: `$realCodeBase`\n\n";

if ( empty( $comparisons ) ) {
	$md .= "No differences found.\n";
} else {
	foreach ( $comparisons as $cmp ) {
		$md .= "## File: `{$cmp['file']}`\n\n";
		$md .= "**Summary**: {$cmp['summary']}\n\n";
		if ( ! empty( $cmp['differences'] ) ) {
			$md .= "**Differences**:\n";
			foreach ( $cmp['differences'] as $diffItem ) {
				$desc = $diffItem['description'] ?? '';
				$md   .= "- $desc\n";
			}
			$md .= "\n";
		}
		if ( ! empty( $cmp['judgment'] ) ) {
			$md .= "**Which Stub Is More Accurate?**\n\n{$cmp['judgment']}\n\n";
		}
		$md .= "---\n\n";
	}
}

file_put_contents( $summaryOutputFile, $md );
echo "Done! Wrote final summary to: $summaryOutputFile\n";