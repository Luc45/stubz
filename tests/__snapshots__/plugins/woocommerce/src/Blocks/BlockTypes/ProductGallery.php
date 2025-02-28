<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductGallery class.
 */
class ProductGallery extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-gallery';
    /**
     * Used to preserve the context for dialog rendering.
     *
     * @var array
     */
    protected $dialog_context;
    /**
     * Initialize the block and Hook into the `render_block_context` filter
     * to update the context for dialog rendering.
     */
    protected function initialize()
{
}
    /**
     *  Register the context
     *
     * @return string[]
     */
    protected function get_block_type_uses_context()
{
}
    /**
     * Inject the single productcontext into the dialog blocks.
     *
     * @param array $context The block context.
     * @param array $block The block.
     * @param array $parent_block The parent block.
     * @return array The updated block context.
     */
    public function inject_dialog_context($context, $block, $parent_block)
{
}
    /**
     * Inject dialog into the product gallery HTML.
     *
     * @param string $gallery_html The gallery HTML.
     * @param string $dialog_html  The dialog HTML.
     *
     * @return string
     */
    protected function inject_dialog($gallery_html, $dialog_html)
{
}
    /**
     * Return the dialog content.
     *
     * @return string
     */
    protected function render_dialog()
{
}
    /**
     * Include and render the block.
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $content    Block content. Default empty string.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
{
}
}