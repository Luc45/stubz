<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * PriceFilter class.
 */
class RatingFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    const RATING_QUERY_VAR = 'rating_filter';

    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'rating-filter';

    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     */
    protected function get_block_type_script($key = null)
    {
        // stub
    }

    /**
     * Get the frontend style handle for this block type.
     *
     * @return string[]
     */
    protected function get_block_type_style()
    {
        // stub
    }

}

