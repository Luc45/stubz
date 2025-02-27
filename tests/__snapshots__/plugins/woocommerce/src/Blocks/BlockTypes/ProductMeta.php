<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductMeta class.
 */
class ProductMeta
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
        // stub
    }

    /**
     * Get the editor style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_editor_style()
    {
        // stub
    }

    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return null
     */
    protected function get_block_type_script($key = null)
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