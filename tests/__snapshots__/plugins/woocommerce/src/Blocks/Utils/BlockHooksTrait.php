<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * BlockHooksTrait
 *
 * Shared functionality for using the Block Hooks API with WooCommerce Blocks.
 */
trait BlockHooksTrait
{
    /**
     * Callback for `hooked_block_types` to auto-inject the mini-cart block into headers after navigation.
     *
     * @param array                             $hooked_blocks An array of block slugs hooked into a given context.
     * @param string                            $position      Position of the block insertion point.
     * @param string                            $anchor_block  The block acting as the anchor for the inserted block.
     * @param array|\WP_Post|\WP_Block_Template $context       Where the block is embedded.
     * @since 8.5.0
     * @return array An array of block slugs hooked into a given context.
     */
    public function register_hooked_block($hooked_blocks, $position, $anchor_block, $context)
{
}
    /**
     * Checks if the provided context contains a the block already.
     *
     * @param array|\WP_Block_Template $context Where the block is embedded.
     * @return boolean
     */
    protected function has_block_in_content($context)
{
}
    /**
     * Given a provided context, returns the content of the context.
     *
     * @param array|\WP_Post|\WP_Block_Template $context Where the block is embedded.
     * @since 8.5.0
     * @return string
     */
    protected function get_context_content($context)
{
}
    /**
     * Given a provided context, returns whether the context refers to header content.
     *
     * @param array|\WP_Post|\WP_Block_Template $context Where the block is embedded.
     * @param string                            $area The area to check against before inserting.
     * @since 8.5.0
     * @return boolean
     */
    protected function is_template_part_or_pattern($context, $area)
{
}
    /**
     * Given a provided context, returns whether the context refers to the target area and isn't marked as excluded.
     *
     * @param array|\WP_Post|\WP_Block_Template $context the context to check.
     * @param string                            $area The area to check against before inserting.
     * @since 8.5.0
     * @return boolean
     */
    protected function is_target_area($context, $area)
{
}
    /**
     * Returns whether the pattern is excluded or not
     *
     * @since 8.5.0
     *
     * @param array|\WP_Block_Template $context Where the block is embedded.
     * @return boolean
     */
    protected function pattern_is_excluded($context)
{
}
}