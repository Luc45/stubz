<?php
/**
 * compare_per_file_with_accuracy.php
 *
 * 1. Compare stub file A vs. stub file B via an AI call -> returns a "differences" array.
 * 2. If differences are found, read the "real" code from a user-configurable base path,
 *    do a second AI call: "Which stub is more accurate and why?"
 * 3. Combine results in the final Markdown.
 *
 * Usage:
 *   php compare_per_file_with_accuracy.php
 */

// -----------------------------------------------------------------------------
// 1. CONFIG
// -----------------------------------------------------------------------------

$dirA = __DIR__ . '/php-stubs-generator/woocommerce';
$dirB = __DIR__ . '/../__snapshots__/plugins/woocommerce';

// The real codebase location. Default:
$realCodeBase = '/home/lucas/Downloads/stub/woocommerce';

// Where we write the final summary
$summaryOutputFile = __DIR__ . '/comparison_summary.md';

// Cache for first and second calls:
$cacheFile     = __DIR__ . '/.comparator-file-cache.json';

// Ollama config
$ollamaEndpoint = 'http://localhost:11434/api/generate';
$ollamaModel    = 'llama3.2';

// Some safety threshold for large files
$maxFileSize = 20000; // 20 KB

// First call: summary schema
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
	'required' => ['summary','differences']
];

// First call: system message
$summarySystemMsg = <<<SYS
You are an AI that compares two PHP stub files from two different tools.
Identify missing classes, extends/implements differences, method or constant differences, etc.
Ignore reorder differences. Return valid JSON: {"summary":"...","differences":[{"description":"..."},...]} 
SYS;

// Second call: "accuracy" schema
$accuracySchema = [
	'type'       => 'object',
	'properties' => [
		'judgment' => ['type'=>'string']
	],
	'required' => ['judgment']
];

// Second call: system message
$accuracySystemMsg = <<<SYS
You are an AI that has the real source code and the differences found between two stub files (A,B).
You must judge which stub is more accurate to the real code. Provide a short explanation in "judgment".
Only return JSON: {"judgment":"..."}
SYS;


// -----------------------------------------------------------------------------
// 2. CACHE
// -----------------------------------------------------------------------------

function loadCache(string $path): array {
	if (!file_exists($path)) return [];
	$txt = file_get_contents($path);
	$decoded = json_decode($txt, true);
	return is_array($decoded) ? $decoded : [];
}

function saveCache(string $path, array $data): void {
	$json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
	file_put_contents($path, $json);
}

// -----------------------------------------------------------------------------
// 3. HELPER FUNCTIONS
// -----------------------------------------------------------------------------

/** Return a sorted list of .php files from the given directory. */
function scanPhpFiles(string $dir): array {
	$out = [];
	if (!is_dir($dir)) return $out;
	$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
	foreach ($it as $f) {
		if ($f->isFile() && strtolower($f->getExtension())==='php') {
			$rel = str_replace($dir . DIRECTORY_SEPARATOR, '', $f->getPathname());
			$out[] = $rel;
		}
	}
	sort($out);
	return $out;
}

/**
 * Make a single request to Ollama with the given model, prompt, format (schema), and system message.
 * Return the parsed JSON from "response", or null on error.
 */
function callOllama(
	string $endpoint,
	string $model,
	string $prompt,
	array  $schema,
	string $systemMsg
): ?array {
	$body = [
		'model'  => $model,
		'prompt' => $prompt,
		'stream' => false,
		'format' => $schema,
		'system' => $systemMsg,
	];

	$jsonBody = json_encode($body);
	$ch = curl_init($endpoint);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonBody);
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
		'Content-Type: application/json',
		'Accept: application/json'
	]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$resp = curl_exec($ch);
	if ($resp === false) {
		curl_close($ch);
		return null;
	}
	curl_close($ch);

	$top = json_decode($resp, true);
	if (!isset($top['response'])) {
		return null;
	}
	return json_decode($top['response'], true) ?: null;
}

// -----------------------------------------------------------------------------
// 4. MAIN
// -----------------------------------------------------------------------------

$cache = loadCache($cacheFile);

$filesA = scanPhpFiles($dirA);
$filesB = scanPhpFiles($dirB);
$common = array_intersect($filesA, $filesB);

$comparisons = [];

foreach ($common as $relPath) {
	// read stub A, stub B
	$pathA = $dirA . '/' . $relPath;
	$pathB = $dirB . '/' . $relPath;
	$contA = file_get_contents($pathA);
	$contB = file_get_contents($pathB);

	if ($contA === $contB) {
		// identical => skip
		continue;
	}

	// build first-call cache key
	$hashA = md5($contA);
	$hashB = md5($contB);
	$key1  = "summary_{$hashA}_{$hashB}";

	// First call result
	if (isset($cache[$key1])) {
		$summaryResult = $cache[$key1];
	} else {
		if (strlen($contA) + strlen($contB) > $maxFileSize) {
			// skip or partial
			$summaryResult = [
				'summary'=>"File pair too large to compare in single prompt.",
				'differences'=>[]
			];
		} else {
			// prompt them
			$prompt = <<<EOP
File A (php-stubs-generator):

```
$contA
```

File B (Stubz):

```
$contB
```
EOP;
			$r = callOllama($ollamaEndpoint, $ollamaModel, $prompt, $summarySchema, $summarySystemMsg);
			if (isset($r['summary']) && isset($r['differences'])) {
				$summaryResult = $r;
			} else {
				$summaryResult = [
					'summary'    => '[AI error or invalid response]',
					'differences'=>[]
				];
			}
		}
		// store
		$cache[$key1] = $summaryResult;
	}

	// We now see if differences exist
	$hasDifferences = !empty($summaryResult['differences']);

	// If differences exist, do the second call with the real code
	$accuracyResult = null;
	if ($hasDifferences) {
		// read the real code. If not found, skip
		$realPath = $realCodeBase . '/' . $relPath;
		if (file_exists($realPath)) {
			$realCont  = file_get_contents($realPath);

			// Build second call's cache key.
			$hashReal = md5($realCont);
			$key2 = "accuracy_{$hashA}_{$hashB}_{$hashReal}";

			if (isset($cache[$key2])) {
				$accuracyResult = $cache[$key2];
			} else {
				// We'll pass the original differences + real code
				// For brevity, we convert differences array to JSON
				$diffJson = json_encode($summaryResult['differences'], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

				$prompt2 = <<<EOP
Below are the differences found between stub A and stub B:
```
$diffJson
```

Below is the *real code* from which these stubs are presumably generated:
```
$realCont
```

Which stub is more accurate to the real code? Provide a short reasoning in JSON. 
EOP;

				$r2 = callOllama($ollamaEndpoint, $ollamaModel, $prompt2, $accuracySchema, $accuracySystemMsg);
				if (isset($r2['judgment'])) {
					$accuracyResult = $r2;
				} else {
					$accuracyResult = [
						'judgment' => '[AI error or invalid response on second call]'
					];
				}
				$cache[$key2] = $accuracyResult;
			}
		} else {
			// Real code not found => skip or note
			$accuracyResult = [
				'judgment'=>"Real code not found at $realPath"
			];
		}
	}

	$comparisons[] = [
		'file'         => $relPath,
		'summary'      => $summaryResult['summary'],
		'differences'  => $summaryResult['differences'],
		'judgment'     => $accuracyResult['judgment'] ?? ''
	];
}

// save updated cache
saveCache($cacheFile, $cache);

// -----------------------------------------------------------------------------
// 5. BUILD FINAL MARKDOWN
// -----------------------------------------------------------------------------

$md = "# Per-File Comparison + Accuracy\n\n";
$md .= "Base directories:\n\n- **Tool A**: `$dirA`\n- **Tool B**: `$dirB`\n";
$md .= "- **Real Code**: `$realCodeBase`\n\n";

if (empty($comparisons)) {
	$md .= "No differences found.\n";
} else {
	foreach ($comparisons as $cmp) {
		$md .= "## File: `{$cmp['file']}`\n\n";
		$md .= "**Summary**: {$cmp['summary']}\n\n";
		if (!empty($cmp['differences'])) {
			$md .= "**Differences**:\n\n";
			foreach ($cmp['differences'] as $dItem) {
				$desc = $dItem['description'] ?? '';
				$md .= "- $desc\n";
			}
			$md .= "\n";
		}
		if (!empty($cmp['judgment'])) {
			$md .= "**Accuracy Judgment**:\n\n";
			$md .= "{$cmp['judgment']}\n\n";
		}
		$md .= "---\n\n";
	}
}

file_put_contents($summaryOutputFile, $md);
echo "Comparison summary saved to: $summaryOutputFile\n";