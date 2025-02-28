<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductMeta class.
 */
class ProductMeta extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-meta';

    /**
     * Get the editor script data for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return null
     */
    protected function get_block_type_editor_script($key = null)
{
}
    /**
     * Get the editor style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_editor_style()
{
}
    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return null
     */
    protected function get_block_type_script($key = null)
{
}
    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
{
}
}