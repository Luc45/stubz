<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Registers patterns under the `./patterns/` directory and from the PTK API and updates their content.
 * Each pattern from core is defined as a PHP file and defines its metadata using plugin-style headers.
 * The minimum required definition is:
 *
 *     /**
 *      * Title: My Pattern
 *      * Slug: my-theme/my-pattern
 *      *
 *
 * The output of the PHP source corresponds to the content of the pattern, e.g.:
 *
 *     <main><p><?php echo "Hello"; ?></p></main>
 *
 * Other settable fields include:
 *
 *   - Description
 *   - Viewport Width
 *   - Categories       (comma-separated values)
 *   - Keywords         (comma-separated values)
 *   - Block Types      (comma-separated values)
 *   - Inserter         (yes/no)
 *
 * @internal
 */
class BlockPatterns
{
    public const CATEGORIES_PREFIXES = array(
'_woo_',
'_dotcom_imported_'
);
    /**
     * Constructor for class
     *
     * @param Package          $package An instance of Package.
     * @param PatternRegistry  $pattern_registry An instance of PatternRegistry.
     * @param PTKPatternsStore $ptk_patterns_store An instance of PTKPatternsStore.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Domain\Package $package, Automattic\WooCommerce\Blocks\Patterns\PatternRegistry $pattern_registry, Automattic\WooCommerce\Blocks\Patterns\PTKPatternsStore $ptk_patterns_store)
{
}
    /**
     * Register block patterns from core.
     *
     * @return void
     */
    public function register_block_patterns()
{
}
    /**
     * Register patterns from the Patterns Toolkit.
     *
     * @return void
     */
    public function register_ptk_patterns()
{
}
}