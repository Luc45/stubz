<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * HandpickedProducts class.
 */
class HandpickedProducts extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'handpicked-products';
    /**
     * Set args specific to this block
     *
     * @param array $query_args Query args.
     */
    protected function set_block_query_args(&$query_args)
    {
    }
    /**
     * Set visibility query args. Handpicked products will show hidden products if chosen.
     *
     * @param array $query_args Query args.
     */
    protected function set_visibility_query_args(&$query_args)
    {
    }
    /**
     * Get block attributes.
     *
     * @return array
     */
    protected function get_block_type_attributes()
    {
    }
}