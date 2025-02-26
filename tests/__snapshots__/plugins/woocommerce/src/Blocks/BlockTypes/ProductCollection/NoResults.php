<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\ProductCollection;

/**
 * NoResults class.
 */
class NoResults extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-collection-no-results';

    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string | void Rendered block output.
     */
    protected function render($attributes, $content, $block)
    {
        // stub
    }

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
     * @return null
     */
    protected function get_block_type_style()
    {
        // stub
    }

    /**
     * Set the URL attributes for "clearing any filters" and "Store's home" links.
     *
     * @param string $content Block content.
     */
    protected function modify_anchor_tag_urls($content)
    {
        // stub
    }

    /**
     * Get current URL without filter query parameters which will be used
     * for the "clear any filters" link.
     */
    protected function get_current_url_without_filters()
    {
        // stub
    }

}

