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
}