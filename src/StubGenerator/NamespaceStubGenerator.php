<?php

declare( strict_types=1 );

namespace Stubz\StubGenerator;

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

		if ( $namespace === '' ) {
			return "<?php\n" . $buffer . "\n";
		}

		// Otherwise, replicate the detected namespace
		return <<<PHP
<?php

namespace {$namespace};

{$buffer}
PHP;
	}
}