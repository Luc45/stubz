<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * SingleProductTemplateCompatibility class.
 *
 * To bridge the gap on compatibility with PHP hooks and Single Product templates.
 *
 * @internal
 */
class SingleProductTemplateCompatibility extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplateCompatibility
{
    public const IS_FIRST_BLOCK = '__wooCommerceIsFirstBlock';
    public const IS_LAST_BLOCK = '__wooCommerceIsLastBlock';
    /**
     * Inject hooks to rendered content of corresponding blocks.
     *
     * @param mixed $block_content The rendered block content.
     * @param mixed $block         The parsed block data.
     * @return string
     */
    public function inject_hooks($block_content, $block)
{
}
    /**
     * Update the render block data to inject our custom attribute needed to
     * determine which is the first block of the Single Product Template.
     *
     * @param array         $parsed_block The block being rendered.
     * @param array         $source_block An un-modified copy of $parsed_block, as it appeared in the source content.
     * @param WP_Block|null $parent_block If this is a nested block, a reference to the parent block.
     *
     * @return array
     */
    public function update_render_block_data($parsed_block, $source_block, $parent_block)
{
}
    /**
     * Set supported hooks.
     */
    protected function set_hook_data()
{
}
    /**
     * Add compatibility layer to the first and last block of the Single Product Template.
     *
     * @param string $template_content Template.
     * @return string
     */
    public static function add_compatibility_layer($template_content)
{
}
}