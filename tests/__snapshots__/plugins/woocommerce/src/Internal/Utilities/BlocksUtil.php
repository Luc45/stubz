<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * Helper functions for working with blocks.
 */
class BlocksUtil
{
    /**
     * Return blocks with their inner blocks flattened.
     *
     * @param array $blocks Array of blocks as returned by parse_blocks().
     * @return array All blocks.
     */
    public static function flatten_blocks($blocks)
{
}
    /**
     * Get all instances of the specified block from the widget area.
     *
     * @param array $block_name The name (id) of a block, e.g. `woocommerce/mini-cart`.
     * @return array Array of blocks as returned by parse_blocks().
     */
    public static function get_blocks_from_widget_area($block_name)
{
}
    /**
     * Get all instances of the specified block on a specific template part.
     *
     * @param string $block_name The name (id) of a block, e.g. `woocommerce/mini-cart`.
     * @param string $template_part_slug The woo page to search, e.g. `header`.
     * @return array Array of blocks as returned by parse_blocks().
     */
    public static function get_block_from_template_part($block_name, $template_part_slug)
{
}
}