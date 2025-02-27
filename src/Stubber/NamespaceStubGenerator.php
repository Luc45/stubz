<?php

declare( strict_types=1 );

namespace Stubz\Stubber;

class NamespaceStubGenerator {
	/**
	 * A buffer that collects all class/function/constant stub code, *without* namespace lines.
	 */
	private string $stubBuffer = '';

	public function addStub( string $stub ): void {
		$this->stubBuffer .= $stub;
	}

	/**
	 * Return the final stub, placing it in exactly one namespace (if non-empty).
	 * If $namespace is an empty string, no namespace line is added (global ns).
	 */
	public function generateFinalStub( string $namespace = '' ): string {
		$buffer = trim( $this->stubBuffer );
		if ( $buffer === '' ) {
			return '';
		}

		// If the original was global => no "namespace" line
		if ( $namespace === '' ) {
			// Return a single stub containing the code in global ns
			return "<?php\n\n" . $buffer . "\n";
		}

		// Otherwise, replicate the detected namespace
		return <<<PHP
<?php

namespace {$namespace};

{$buffer}
PHP;
	}
}