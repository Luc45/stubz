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
    const CATEGORIES_PREFIXES = array (
  0 => '_woo_',
  1 => '_dotcom_imported_',
);

    /**
     * Path to the patterns' directory.
     *
     * @var string $patterns_path
     */
    private string $patterns_path;

    /**
     * PatternRegistry instance.
     *
     * @var PatternRegistry $pattern_registry
     */
    private Automattic\WooCommerce\Blocks\Patterns\PatternRegistry $pattern_registry;

    /**
     * Patterns dictionary
     *
     * @var array|WP_Error
     */
    private $dictionary = null;

    /**
     * PTKPatternsStore instance.
     *
     * @var PTKPatternsStore $ptk_patterns_store
     */
    private Automattic\WooCommerce\Blocks\Patterns\PTKPatternsStore $ptk_patterns_store;

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
     * Returns the Patterns dictionary.
     *
     * @return array|WP_Error
     */
    private function get_patterns_dictionary()
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
     * Gets block pattern data from the cache if available
     *
     * @return array Block pattern data.
     */
    private function get_block_patterns()
{
}
    /**
     * Gets block pattern cache.
     *
     * @return array|false Returns an array of patterns if cache is found, otherwise false.
     */
    private function get_pattern_cache()
{
}
    /**
     * Sets block pattern cache.
     *
     * @param array $patterns Block patterns data to set in cache.
     */
    private function set_pattern_cache(array $patterns)
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
    /**
     * Parse prefixed categories from the PTK patterns into the actual WooCommerce categories.
     *
     * @param array $patterns The patterns to parse.
     * @return array The parsed patterns.
     */
    private function parse_categories(array $patterns)
{
}
}