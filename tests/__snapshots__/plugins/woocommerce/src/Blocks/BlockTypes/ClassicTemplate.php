<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Classic Template class
 *
 * @internal
 */
class ClassicTemplate extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'legacy-template';

    /**
     * API version.
     *
     * @var string
     */
    protected $api_version = '3';

    /**
     * Initialize this block.
     */
    protected function initialize()
    {
        // stub
    }

    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = array(
))
    {
        // stub
    }

    /**
     * Enqueue assets used for rendering the block in editor context.
     *
     * This is needed if a block is not yet within the post content--`render` and `enqueue_assets` may not have ran.
     */
    public function enqueue_block_assets()
    {
        // stub
    }

    /**
     * Render method for the Classic Template block. This method will determine which template to render.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block      Block instance.
     * @return string | void Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
        // stub
    }

    /**
     * Render method for rendering the order confirmation template.
     *
     * @return string Rendered block type output.
     */
    protected function render_order_received()
    {
        // stub
    }

    /**
     * Render method for the single product template and parts.
     *
     * @return string Rendered block type output.
     */
    protected function render_single_product()
    {
        // stub
    }

    /**
     * Render method for the archive product template and parts.
     *
     * @return string Rendered block type output.
     */
    protected function render_archive_product()
    {
        // stub
    }

    /**
     * Get HTML markup with the right classes by attributes.
     * This function appends the classname at the first element that have the class attribute.
     * Based on the experience, all the wrapper elements have a class attribute.
     *
     * @param string $content Block content.
     * @param array  $block Parsed block data.
     * @return string Rendered block type output.
     */
    public function add_alignment_class_to_wrapper(string $content, array $block)
    {
        // stub
    }

    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
    {
        // stub
    }

}

