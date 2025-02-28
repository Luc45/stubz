<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductNew class.
 */
class ProductNew extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractProductGrid
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-new';
    /**
     * Set args specific to this block
     *
     * @param array $query_args Query args.
     */
    protected function set_block_query_args(&$query_args)
    {
    }
}