<?php

// Paths to the stub directories
$stubzPath = './../__snapshots__/plugins/woocommerce';
$phpStubsGeneratorPath = './php-stubs-generator/woocommerce';
$cacheFile = '.comparator-a-cache.json';

// Load cache
$cache = file_exists($cacheFile) ? json_decode(file_get_contents($cacheFile), true) : [];

// Function to read all files recursively and return their contents
function getStubFilesContents(string $dir): array {
	$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
	$files = [];

	foreach ($rii as $file) {
		if ($file->isDir()) continue;
		$relativePath = str_replace($dir . '/', '', $file->getPathname());
		$files[$relativePath] = file_get_contents($file->getPathname());
	}

	return $files;
}

// Get file contents for both stubs
$stubzFiles = getStubFilesContents($stubzPath);
$phpStubGenFiles = getStubFilesContents($phpStubsGeneratorPath);

// Identify all unique files
$allFiles = array_unique(array_merge(array_keys($stubzFiles), array_keys($phpStubGenFiles)));

$markdownSummary = "# Stub Comparison Summary\n\n";

foreach ($allFiles as $file) {
	$stubzContent = $stubzFiles[$file] ?? '';
	$phpStubGenContent = $phpStubGenFiles[$file] ?? '';

	$hashStubz = md5($stubzContent);
	$hashPhpStubGen = md5($phpStubGenContent);

	$cacheKey = $file;

	if (isset($cache[$cacheKey]) && $cache[$cacheKey]['hashStubz'] === $hashStubz && $cache[$cacheKey]['hashPhpStubGen'] === $hashPhpStubGen) {
		$aiAnalysis = $cache[$cacheKey]['response'];
	} else {
		// Send the prompt to Ollama using llama3.2 model with proper JSON schema formatting
		$ch = curl_init('http://localhost:11434/api/generate');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
			'model' => 'llama3.2',
			'prompt' => "Compare these two PHP stub files and detail the differences. Respond strictly in JSON matching the provided schema.",
			'format' => [
				'type' => 'object',
				'properties' => [
					'differences' => [
						'type' => 'array',
						'items' => [
							'type' => 'object',
							'properties' => [
								'file' => ['type' => 'string'],
								'location' => ['type' => 'string'],
								'old_content' => ['type' => 'string'],
								'new_content' => ['type' => 'string'],
								'change' => ['type' => 'string']
							],
							'required' => ['file', 'location', 'old_content', 'new_content', 'change']
						]
					],
					'accuracy_notes' => ['type' => 'string'],
					'completeness_notes' => ['type' => 'string'],
					'quality_notes' => ['type' => 'string']
				],
				'required' => ['differences', 'accuracy_notes', 'completeness_notes', 'quality_notes']
			],
			'stream' => false
		]));

		$response = curl_exec($ch);
		curl_close($ch);

		// Decode response
		$result = json_decode($response, true);
		$aiAnalysis = json_decode($result['response'] ?? '{}', true);

		// Update cache
		$cache[$cacheKey] = [
			'hashStubz' => $hashStubz,
			'hashPhpStubGen' => $hashPhpStubGen,
			'response' => $aiAnalysis
		];
	}

	// Build markdown summary
	$markdownSummary .= "## File: {$file}\n";
	foreach ($aiAnalysis['differences'] as $diff) {
		$markdownSummary .= "- **Location:** {$diff['location']}\n";
		$markdownSummary .= "  - **Change:** {$diff['change']}\n";
		$markdownSummary .= "  - **Old Content:** ```\n{$diff['old_content']}\n```\n";
		$markdownSummary .= "  - **New Content:** ```\n{$diff['new_content']}\n```\n";
	}
	$markdownSummary .= "\n### Accuracy Notes\n{$aiAnalysis['accuracy_notes']}\n";
	$markdownSummary .= "### Completeness Notes\n{$aiAnalysis['completeness_notes']}\n";
	$markdownSummary .= "### Quality Notes\n{$aiAnalysis['quality_notes']}\n";
	$markdownSummary .= "\n---\n\n";
}

// Save cache
file_put_contents($cacheFile, json_encode($cache));

// Save summary to file
file_put_contents('stub_comparison_summary.md', $markdownSummary);

// Output location
print "Comparison summary saved to stub_comparison_summary.md\n";