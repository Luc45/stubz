<?php

namespace Automattic\WooCommerce\Blocks\Patterns;

/**
 * PatternRegistry class.
 *
 * @internal
 */
class PatternRegistry
{
    const SLUG_REGEX = '/^[A-z0-9\\/_-]+$/';
    const COMMA_SEPARATED_REGEX = '/[\\s,]+/';
    /**
     * Returns pattern slugs with their localized labels for categorization.
     *
     * Each key represents a unique pattern slug, while the value is the localized label.
     *
     * @return array<string, string>
     */
    private function get_category_labels()
{
}
    /**
     * Register a block pattern.
     *
     * @param string $source The pattern source.
     * @param array  $pattern_data The pattern data.
     * @param array  $dictionary The patterns' dictionary.
     *
     * @return void
     */
    public function register_block_pattern($source, $pattern_data, $dictionary)
{
}
    /**
     * Filter the patterns dictionary to get the pattern data corresponding to the pattern slug.
     *
     * @param array  $dictionary The patterns' dictionary.
     * @param string $slug The pattern slug.
     *
     * @return array|null
     */
    private function get_pattern_from_dictionary($dictionary, $slug)
{
}
    /**
     * Convert a kebab-case string to capital case.
     *
     * @param string $value The kebab-case string.
     *
     * @return string
     */
    private static function kebab_to_capital_case($value)
{
}
}