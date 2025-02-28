<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductOnSale class.
 */
class ProductOnSale extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-on-sale';
    /**
     * Set args specific to this block
     *
     * @param array $query_args Query args.
     */
    protected function set_block_query_args(&$query_args)
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