<?php
/**
 * compare_per_file_with_accuracy_progress.php
 *
 * 1) Compare one file from php-stubs-generator to the same file from Stubz using an AI call.
 * 2) If differences exist, read the real code from a specified base path, do a second AI call,
 *    and ask "Which stub is more accurate?".
 * 3) Store each result in a JSON cache *immediately* after it’s available, so you don't lose data if stopped.
 * 4) Provide a simple progress indicator as we iterate files.
 *
 * Usage:
 *   php compare_per_file_with_accuracy_progress.php
 */

// -----------------------------------------------------------------------------
// 1. CONFIG
// -----------------------------------------------------------------------------

// Tool directories
$dirA = __DIR__ . '/php-stubs-generator/woocommerce';  // "php-stubs-generator"
$dirB = __DIR__ . '/../__snapshots__/plugins/woocommerce'; // "Stubz"

// The real codebase location (configurable). By default:
$realCodeBase = '/home/lucas/Downloads/stub/woocommerce';

// Where we write the final summary
$summaryOutputFile = __DIR__ . '/comparison_summary.md';

// JSON cache (so we skip re-running AI if nothing changed)
$cacheFile = __DIR__ . '/.comparator-file-cache.json';

// Ollama / API settings
$ollamaEndpoint = 'http://localhost:11434/api/generate';
$ollamaModel    = 'qwen2.5-coder:14b';

$maxFileSize = 20000; // 20 KB safety limit per pair

// First call schema
$summarySchema = [
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
// First call system message: mention tool names
$summarySystemMsg = <<<SYS
You are an AI that compares two PHP stub files:
- One from "php-stubs-generator"
- One from "Stubz"

Identify missing classes, extends/implements differences, methods, constants, docblocks, etc.
Ignore reorder differences. Return valid JSON like:
{
  "summary": "...",
  "differences": [ { "description":"..." }, ... ]
}
SYS;

// Second call schema
$accuracySchema = [
	'type'       => 'object',
	'properties' => [
		'judgment' => [ 'type' => 'string' ]
	],
	'required'   => [ 'judgment' ]
];
// Second call system message: mention tool names
$accuracySystemMsg = <<<SYS
You are an AI that has the real source code plus the differences found between:
- A stub from "php-stubs-generator"
- A stub from "Stubz"

Decide which stub is more faithful to the real code and explain briefly. Return JSON:
{
  "judgment":"..."
}
SYS;


// -----------------------------------------------------------------------------
// 2. CACHE
// -----------------------------------------------------------------------------

/** Load the cache JSON. */
function loadCache( string $path ): array {
	if ( ! file_exists( $path ) ) {
		return [];
	}
	$data    = file_get_contents( $path );
	$decoded = json_decode( $data, true );

	return is_array( $decoded ) ? $decoded : [];
}

/** Save the cache JSON. */
function saveCache( string $path, array $cache ): void {
	$json = json_encode( $cache, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
	file_put_contents( $path, $json );
}

// -----------------------------------------------------------------------------
// 3. HELPER FUNCTIONS
// -----------------------------------------------------------------------------

/** Return a list of .php files under $dir (relative paths). */
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

/** Call Ollama with a single request. Return the parsed JSON from `response` or null on error. */
function callOllama(
	string $endpoint,
	string $model,
	string $prompt,
	array $schema,
	string $systemMsg
): ?array {
	$body = [
		'model'  => $model,
		'prompt' => $prompt,
		'stream' => false,
		'format' => $schema,
		'system' => $systemMsg,
		// you could add 'options'=>['temperature'=>0.2] if you want
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

// Load or init cache
$cache = loadCache( $cacheFile );

$filesA = scanPhpFiles( $dirA );  // from "php-stubs-generator"
$filesB = scanPhpFiles( $dirB );  // from "Stubz"

// Intersection => files common to both
$common = array_intersect( $filesA, $filesB );
$common = array_values( $common ); // reindex

$total   = count( $common );
$current = 0;

$comparisons = [];

foreach ( $common as $relPath ) {
	$current ++;
	// progress indicator
	echo "[{$current}/{$total}] Comparing: $relPath\n";

	$pathA = $dirA . '/' . $relPath;  // php-stubs-generator stub
	$pathB = $dirB . '/' . $relPath;  // Stubz stub

	$contA = file_get_contents( $pathA );
	$contB = file_get_contents( $pathB );

	// Remove empty lines (with trim)
	$contA = implode( "\n", array_filter( explode( "\n", $contA ), function ( $line ) {
		return trim( $line ) !== '';
	} ) );

	$contB = implode( "\n", array_filter( explode( "\n", $contB ), function ( $line ) {
		return trim( $line ) !== '';
	} ) );

	// if identical, skip
	if ( $contA === $contB ) {
		continue;
	}

	// generate a cache key for the first (summary) call
	$hashA = md5( $contA );
	$hashB = md5( $contB );
	$key1  = "summary_{$hashA}_{$hashB}";

	// FIRST CALL
	if ( isset( $cache[ $key1 ] ) ) {
		$summaryResult = $cache[ $key1 ];
	} else {
		if ( strlen( $contA ) + strlen( $contB ) > $maxFileSize ) {
			$summaryResult = [
				'summary'     => 'Files too large to compare in one prompt.',
				'differences' => []
			];
		} else {
			// Build the prompt
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
			$r      = callOllama( $ollamaEndpoint, $ollamaModel, $prompt, $summarySchema, $summarySystemMsg );
			if ( isset( $r['summary'] ) && isset( $r['differences'] ) ) {
				$summaryResult = $r;
			} else {
				$summaryResult = [
					'summary'     => '[AI error or invalid response on first call]',
					'differences' => []
				];
			}
		}
		// store in cache *immediately*
		$cache[ $key1 ] = $summaryResult;
		saveCache( $cacheFile, $cache );
	}

	// check if differences exist
	$hasDifferences = ! empty( $summaryResult['differences'] );

	// If differences, read real code + do second call
	$accuracyResult = null;
	if ( $hasDifferences ) {
		$realPath = $realCodeBase . '/' . $relPath;
		if ( file_exists( $realPath ) ) {
			$realCont = file_get_contents( $realPath );

			$hashReal = md5( $realCont );
			$key2     = "accuracy_{$hashA}_{$hashB}_{$hashReal}";

			if ( isset( $cache[ $key2 ] ) ) {
				$accuracyResult = $cache[ $key2 ];
			} else {
				// build second prompt
				$diffJson = json_encode( $summaryResult['differences'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES );
				$prompt2  = <<<EOT
Differences found between "php-stubs-generator" stub and "Stubz" stub (in JSON):
```
$diffJson
```

Here is the real code for reference:

```
$realCont
```

Which stub is more accurate to the real code, and why?
EOT;
				$r2       = callOllama( $ollamaEndpoint, $ollamaModel, $prompt2, $accuracySchema, $accuracySystemMsg );
				if ( isset( $r2['judgment'] ) ) {
					$accuracyResult = $r2;
				} else {
					$accuracyResult = [
						'judgment' => '[AI error or invalid response on second call]'
					];
				}
				// store in cache *immediately*
				$cache[ $key2 ] = $accuracyResult;
				saveCache( $cacheFile, $cache );
			}
		} else {
			$accuracyResult = [
				'judgment' => "Real code not found at $realPath"
			];
		}
	}

	$comparisons[] = [
		'file'        => $relPath,
		'summary'     => $summaryResult['summary'],
		'differences' => $summaryResult['differences'],
		'judgment'    => $accuracyResult['judgment'] ?? ''
	];
}

// After we finish all files, we have a list of comparisons
// Write final summary:
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
			$md .= "**Which Stub Is More Accurate?**\n\n";
			$md .= "{$cmp['judgment']}\n\n";
		}
		$md .= "---\n\n";
	}
}

file_put_contents( $summaryOutputFile, $md );
echo "Done! Wrote final summary to: $summaryOutputFile\n";