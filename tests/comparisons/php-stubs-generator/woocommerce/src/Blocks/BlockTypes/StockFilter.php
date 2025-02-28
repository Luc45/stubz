<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AttributeFilter class.
 */
class StockFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'stock-filter';
    const STOCK_STATUS_QUERY_VAR = 'filter_stock_status';
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $stock_statuses  Any stock statuses that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $stock_statuses = [])
    {
    }
    /**
     * Get Stock status query variables values.
     */
    public static function get_stock_status_query_var_values()
    {
    }
    /**
     * Get the frontend style handle for this block type.
     *
     * @return string[]
     */
    protected function get_block_type_style()
    {
    }
}