<?php

/**
 * Blocks Utility class.
 */
class WC_Blocks_Utils
{
    /**
     * Get blocks from a woocommerce page.
     *
     * @param string $woo_page_name A woocommerce page e.g. `checkout` or `cart`.
     * @return array Array of blocks as returned by parse_blocks().
     */
    private static function get_all_blocks_from_page($woo_page_name)
{
}
    /**
     * Get all instances of the specified block on a specific woo page
     * (e.g. `cart` or `checkout` page).
     *
     * @param string $block_name The name (id) of a block, e.g. `woocommerce/cart`.
     * @param string $woo_page_name The woo page to search, e.g. `cart`.
     * @return array Array of blocks as returned by parse_blocks().
     */
    public static function get_blocks_from_page($block_name, $woo_page_name)
{
}
    /**
     * Check if a given page contains a particular block.
     *
     * @param int|WP_Post $page Page post ID or post object.
     * @param string      $block_name The name (id) of a block, e.g. `woocommerce/cart`.
     * @return bool Boolean value if the page contains the block or not. Null in case the page does not exist.
     */
    public static function has_block_in_page($page, $block_name)
{
}
}
