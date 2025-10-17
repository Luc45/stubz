<?php

declare( strict_types=1 );

namespace Stubz\StubGenerator;

use PhpParser\Node;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitorAbstract;
use PhpParser\ParserFactory;

/**
 * Extracts runtime constants from WordPress/WooCommerce files
 *
 * This class finds constants that are defined at runtime using:
 * - define() function calls
 * - $this->define() method calls (WooCommerce pattern)
 */
class RuntimeConstantExtractor {

	/**
	 * Known WordPress/WooCommerce constants with their default values
	 *
	 * These fallback values are used when the constant's value cannot be statically determined.
	 * This happens when constants are defined using complex expressions like:
	 * - Function calls: dirname( WC_PLUGIN_FILE ) . '/'
	 * - Variable/property references: $this->version
	 * - WordPress functions: plugin_basename( WC_PLUGIN_FILE )
	 *
	 * Without these fallbacks, such constants would default to empty strings (''),
	 * which could cause type mismatches in static analysis. These known defaults
	 * provide more accurate type hints for PHPStan.
	 */
	private const KNOWN_CONSTANTS = [
		// WooCommerce path constants
		'WC_ABSPATH' => "''",                     // Usually: dirname( WC_PLUGIN_FILE ) . '/'
		'WC_PLUGIN_FILE' => "''",                 // Usually: __FILE__ from main plugin file
		'WC_PLUGIN_BASENAME' => "''",             // Usually: plugin_basename( WC_PLUGIN_FILE )

		// Version constants
		'WC_VERSION' => "'0.0.0'",                // Usually: $this->version property
		'WOOCOMMERCE_VERSION' => "'0.0.0'",       // Legacy version constant

		// Numeric precision constants for calculations
		'WC_ROUNDING_PRECISION' => '6',           // Decimal places for rounding
		'WC_DISCOUNT_ROUNDING_MODE' => '2',       // PHP_ROUND_HALF_DOWN
		'WC_TAX_ROUNDING_MODE' => '1',            // PHP_ROUND_HALF_UP

		// Configuration constants
		'WC_DELIMITER' => "'|'",                  // Used for separating values
		'WC_SESSION_CACHE_GROUP' => "'wc_session_id'",
		'WC_TEMPLATE_DEBUG_MODE' => 'false',

		// Directory and path constants
		'WC_LOG_DIR' => "''",                     // Usually: wp_content_dir() . '/uploads/wc-logs/'
		'WC_LOG_DIR_CUSTOM' => 'false',
		'WC_TEMPLATE_PATH' => "''",               // Usually: 'woocommerce/'

		// Minimum requirement constants
		'WC_NOTICE_MIN_PHP_VERSION' => "'7.2'",
		'WC_NOTICE_MIN_WP_VERSION' => "'5.2'",
		'WC_PHP_MIN_REQUIREMENTS_NOTICE' => "'wp_php_min_requirements_7.2_5.2'",
		'WC_SSR_PLUGIN_UPDATE_RELEASE_VERSION_TYPE' => "'none'",
	];

	/**
	 * Extract runtime constants from a PHP file
	 *
	 * @param string $filePath Path to the PHP file
	 * @param array<string> $excludeConstants Constants to exclude (already found by BetterReflection)
	 * @return array<string, string> Array of constant name => value pairs
	 */
	public function extractConstants( string $filePath, array $excludeConstants = [] ): array {
		if ( ! file_exists( $filePath ) ) {
			return [];
		}

		$code = file_get_contents( $filePath );
		if ( $code === false ) {
			return [];
		}

		$parser = ( new ParserFactory )->createForHostVersion();

		try {
			$ast = $parser->parse( $code );
			if ( $ast === null ) {
				return [];
			}
		} catch ( \Exception $e ) {
			// If we can't parse, return empty
			return [];
		}

		$visitor = new class extends NodeVisitorAbstract {
			/** @var array<string, string> */
			public array $constants = [];

			public function enterNode( Node $node ) {
				// Look for define() function calls
				if ( $node instanceof Node\Expr\FuncCall
					&& $node->name instanceof Node\Name
					&& $node->name->toString() === 'define'
					&& count( $node->args ) >= 2
				) {
					$this->extractDefineCall( $node );
				}

				// Look for $this->define() method calls (WooCommerce pattern)
				if ( $node instanceof Node\Expr\MethodCall
					&& $node->var instanceof Node\Expr\Variable
					&& $node->var->name === 'this'
					&& $node->name instanceof Node\Identifier
					&& $node->name->name === 'define'
					&& count( $node->args ) >= 2
				) {
					$this->extractDefineCall( $node );
				}

				return null;
			}

			/**
			 * @param Node\Expr\FuncCall|Node\Expr\MethodCall $node
			 * @return void
			 */
			private function extractDefineCall( $node ): void {
				if ( ! isset( $node->args[0] ) || ! isset( $node->args[1] ) ) {
					return;
				}

				// Check that args are not VariadicPlaceholder
				if ( ! $node->args[0] instanceof Node\Arg || ! $node->args[1] instanceof Node\Arg ) {
					return;
				}

				$nameArg = $node->args[0]->value;
				$valueArg = $node->args[1]->value;

				// Get constant name
				$constantName = null;
				if ( $nameArg instanceof Node\Scalar\String_ ) {
					$constantName = $nameArg->value;
				}

				if ( ! $constantName ) {
					return;
				}

				// Try to get a simple value
				$value = $this->getNodeValue( $valueArg );

				// Store the constant
				$this->constants[ $constantName ] = $value;
			}

			private function getNodeValue( Node $node ): string {
				// Handle simple scalar values
				if ( $node instanceof Node\Scalar\String_ ) {
					return "'" . addslashes( $node->value ) . "'";
				}
				if ( $node instanceof Node\Scalar\LNumber ) {
					return (string) $node->value;
				}
				if ( $node instanceof Node\Scalar\DNumber ) {
					return (string) $node->value;
				}
				if ( $node instanceof Node\Expr\ConstFetch ) {
					$name = $node->name->toString();
					if ( $name === 'true' ) return 'true';
					if ( $name === 'false' ) return 'false';
					if ( $name === 'null' ) return 'null';
				}

				// For complex expressions, check if it's a known constant
				// and use a default value
				return "''";
			}
		};

		$traverser = new NodeTraverser();
		$traverser->addVisitor( $visitor );
		$traverser->traverse( $ast );

		/** @var array<string, string> $constants */
		$constants = $visitor->constants;

		// Remove constants that were already found by BetterReflection
		foreach ( $excludeConstants as $excludeName ) {
			unset( $constants[ $excludeName ] );
		}

		// Add known constants with proper values if they were found but couldn't be evaluated
		foreach ( $constants as $name => $value ) {
			if ( $value === "''" && isset( self::KNOWN_CONSTANTS[ $name ] ) ) {
				$constants[ $name ] = self::KNOWN_CONSTANTS[ $name ];
			}
		}

		return $constants;
	}

	/**
	 * Generate stub content for runtime constants
	 *
	 * @param array<string, string> $constants Array of constant name => value pairs
	 * @return string PHP code defining the constants
	 */
	public function generateConstantsStub( array $constants ): string {
		if ( empty( $constants ) ) {
			return '';
		}

		$stub = '';
		foreach ( $constants as $name => $value ) {
			// Skip if it's not a valid constant name
			if ( ! preg_match( '/^[A-Z_][A-Z0-9_]*$/i', $name ) ) {
				continue;
			}
			$stub .= "define('$name', $value);\n";
		}

		return $stub;
	}
}