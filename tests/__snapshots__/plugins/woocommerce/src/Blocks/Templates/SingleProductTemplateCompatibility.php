<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * SingleProductTemplateCompatibility class.
 *
 * To bridge the gap on compatibility with PHP hooks and Single Product templates.
 *
 * @internal
 */
class SingleProductTemplateCompatibility
{
    const IS_FIRST_BLOCK = '__wooCommerceIsFirstBlock';

    const IS_LAST_BLOCK = '__wooCommerceIsLastBlock';

    /**
     * Inject hooks to rendered content of corresponding blocks.
     *
     * @param mixed $block_content The rendered block content.
     * @param mixed $block         The parsed block data.
     * @return string
     */
    public function inject_hooks($block_content, $block)
    {
        // stub
    }

    /**
     * Inject custom hooks to the first and last blocks.
     * Since that there is a custom logic for the first and last block, we have to inject the hooks manually.
     * The first block supports the following hooks:
     * woocommerce_before_single_product
     * woocommerce_before_single_product_summary
     *
     * The last block supports the following hooks:
     * woocommerce_after_single_product
     *
     * @param mixed $block_content The rendered block content.
     * @param mixed $block         The parsed block data.
     * @param array $block_hooks   The hooks that should be injected to the block.
     * @return string
     */
    private function inject_hook_to_first_and_last_blocks($block_content, $block, $block_hooks)
    {
        // stub
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
        // stub
    }

    /**
     * Set supported hooks.
     */
    protected function set_hook_data()
    {
        // stub
    }

    /**
     * Add compatibility layer to the first and last block of the Single Product Template.
     *
     * @param string $template_content Template.
     * @return string
     */
    public static function add_compatibility_layer($template_content)
    {
        // stub
    }

    /**
     * For compatibility reason, we need to wrap the Single Product template in a div with specific class.
     * For more details, see https://github.com/woocommerce/woocommerce-blocks/issues/8314.
     *
     * @param string $template_content Template Content.
     * @return array Wrapped template content inside a div.
     */
    private static function wrap_single_product_template($template_content)
    {
        // stub
    }

    /**
     * Add custom attributes to the first group block and last group block that wrap Single Product Template blocks.
     *
     * @param array $wrapped_blocks Wrapped blocks.
     * @return array
     */
    private static function inject_custom_attributes_to_first_and_last_block_single_product_template($wrapped_blocks)
    {
        // stub
    }

    /**
     * Wrap all the blocks inside the template in a group block.
     *
     * @param array $blocks Array of parsed block objects.
     * @return array Group block with the blocks inside.
     */
    private static function create_wrap_block_group($blocks)
    {
        // stub
    }

    /**
     * Check if the Single Product template has a single product template block:
     * woocommerce/product-gallery-image, woocommerce/product-details, woocommerce/add-to-cart-form, etc.
     *
     * @param array $parsed_blocks Array of parsed block objects.
     * @return bool True if the template has a single product template block, false otherwise.
     */
    private static function has_single_product_template_blocks($parsed_blocks)
    {
        // stub
    }

    /**
     * Group blocks in this way:
     * B1 + TP1 + B2 + B3 + B4 + TP2 + B5
     * (B = Block, TP = Template Part)
     * becomes:
     * [[B1], [TP1], [B2, B3, B4], [TP2], [B5]]
     *
     * @param array $parsed_blocks Array of parsed block objects.
     * @return array Array of blocks grouped by template part.
     */
    private static function group_blocks($parsed_blocks)
    {
        // stub
    }

    /**
     * Inject the hooks after the div wrapper.
     *
     * @param string $block_content Block Content.
     * @param array  $hooks Hooks to inject.
     * @return array
     */
    private function inject_hooks_after_the_wrapper($block_content, $hooks)
    {
        // stub
    }

    /**
     * Plain custom HTML block is parsed as block with an empty blockName with a filled innerHTML.
     *
     * @param array $block Parse block.
     * @return bool
     */
    private static function is_custom_html($block)
    {
        // stub
    }

    /**
     * Serialize template.
     *
     * @param array $parsed_blocks Parsed blocks.
     * @return string
     */
    private static function serialize_blocks($parsed_blocks)
    {
        // stub
    }

}