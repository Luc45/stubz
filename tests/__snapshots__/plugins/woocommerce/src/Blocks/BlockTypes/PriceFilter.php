<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * PriceFilter class.
 */
class PriceFilter
{
    const MIN_PRICE_QUERY_VAR = 'min_price';

    const MAX_PRICE_QUERY_VAR = 'max_price';

    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'price-filter';

    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = array())
{
}
}