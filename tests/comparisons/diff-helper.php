<?php
/**
 * create_ai_prompts.php
 *
 * Reads .comparator-changes-cache.json and generates AI prompts asking the AI to
 * fix the Stubz code based on the real code, the differences, and an additional
 * "stubz-code.txt" snippet. After displaying each prompt, it waits for user
 * confirmation before clearing the screen and moving to the next.
 */

// ----------------------------------------------------------------------------
// 1. CONFIG
// ----------------------------------------------------------------------------

// Adjust paths as needed:
$changesCacheFile = __DIR__ . '/.comparator-changes-cache.json';
$stubzCodePath    = __DIR__ . '/stubz-code.txt';

// Change this if your real code is in a different location:
$realCodeBase = '/home/lucas/Downloads/stub/woocommerce';

// Attempt a cross-platform clear screen approach.
// If you're on Windows, you might replace 'clear' with 'cls'.
function clearScreen(): void {
	if ( stristr( PHP_OS, 'WIN' ) ) {
		// Windows
		// Attempt "cls"
		system( 'cls' );
	} else {
		// Linux / Mac
		system( 'clear' );
	}
}

// ----------------------------------------------------------------------------
// 2. LOAD CACHE + FILES
// ----------------------------------------------------------------------------

if ( ! file_exists( $changesCacheFile ) ) {
	exit( "File not found: $changesCacheFile\n" );
}
$changesCache = json_decode( file_get_contents( $changesCacheFile ), true );
if ( ! is_array( $changesCache ) ) {
	exit( "Could not parse JSON from $changesCacheFile.\n" );
}

// Load stubz-code.txt (your additional snippet)
$stubzExtraCode = file_exists( $stubzCodePath )
	? file_get_contents( $stubzCodePath )
	: "[No stubz-code.txt found]";

// ----------------------------------------------------------------------------
// 3. PROMPT GENERATION
// ----------------------------------------------------------------------------

$fileCount = count( $changesCache );
if ( $fileCount === 0 ) {
	echo "No entries found in changes cache.\n";
	exit;
}

// Convert the changes-cache from assoc to a list, if needed.
$keys         = array_keys( $changesCache );
$currentIndex = 0;

while ( $currentIndex < $fileCount ) {
	$key  = $keys[ $currentIndex ];
	$item = $changesCache[ $key ];

	// Each $item typically has: summary, differences[], relPath, pathA, pathB, etc.
	$relPath      = $item['relPath'] ?? '[unknown-rel-path]';
	$phpStubsPath = $item['pathA'] ?? '';
	$stubzPath    = $item['pathB'] ?? '';
	$differences  = $item['differences'] ?? [];

	// Load content from the two stub files
	$phpStubsContent = ( file_exists( $phpStubsPath ) )
		? file_get_contents( $phpStubsPath )
		: "[File not found: $phpStubsPath]";
	$stubzContent    = ( file_exists( $stubzPath ) )
		? file_get_contents( $stubzPath )
		: "[File not found: $stubzPath]";

	// Real code path
	$realPath        = $realCodeBase . '/' . $relPath;
	$realCodeContent = ( file_exists( $realPath ) )
		? file_get_contents( $realPath )
		: "[Real code not found: $realPath]";

	// Build a bullet list of differences
	$diffLines = '';
	foreach ( $differences as $diff ) {
		$desc      = $diff['description'] ?? '[No description]';
		$diffLines .= '- ' . $desc . "\n";
	}

	// Construct the combined prompt
	// (Feel free to adjust the formatting as you wish.)
	$prompt = <<<PROMPT

================================================================================
FILE: $relPath

DIFFERENCES (from .comparator-changes-cache.json):
$diffLines

[PHP-STUBS-GENERATOR OUTPUT]
$phpStubsContent

[STUBZ OUTPUT]
$stubzContent

[REAL CODE]
$realCodeContent

[EXTRA "stubz-code.txt" SNIPPET]
$stubzExtraCode

REQUEST:
Please examine the real code and the differences, then **fix the Stubz CODE GENERATOR, NOT THE GENERATED STUB** so it 
generates accurate stubs. Fhe fix should give the complete method or complete class that I can copy and paste, it should be working, not an example, don't add unnecessary comments.

Ideally, it should use just Better Reflection, not AST.

================================================================================

PROMPT;

	// ----------------------------------------------------------------------------
	// 4. Output the prompt + Wait for user
	// ----------------------------------------------------------------------------

	// Clear the screen first
	clearScreen();

	echo "Entry " . ( $currentIndex + 1 ) . " of $fileCount\n\n";
	echo $prompt . "\n";

	// Wait for user confirmation
	echo "[Press Enter for next entry, or type 'q' then Enter to quit] ";
	$input = trim( fgets( STDIN ) );
	if ( strtolower( $input ) === 'q' ) {
		// Quit
		break;
	}

	// Otherwise, move on
	$currentIndex ++;
}

echo "Done!\n";