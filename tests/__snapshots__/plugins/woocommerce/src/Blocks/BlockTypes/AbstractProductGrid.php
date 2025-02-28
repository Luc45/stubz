<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AbstractProductGrid class.
 */
abstract class AbstractProductGrid
{
    /**
     * Attributes.
     *
     * @var array
     */
    protected $attributes = array();

    /**
     * InnerBlocks content.
     *
     * @var string
     */
    protected $content = '';

    /**
     * Query args.
     *
     * @var array
     */
    protected $query_args = array();

    /**
     * Meta query args.
     *
     * @var array
     */
    protected $meta_query = array();

    /**
     * Get a set of attributes shared across most of the grid blocks.
     *
     * @return array List of block attributes with type and defaults.
     */
    protected function get_block_type_attributes()
{
}
    /**
     * Include and render the dynamic block.
     *
     * @param array         $attributes Block attributes. Default empty array.
     * @param string        $content    Block content. Default empty string.
     * @param WP_Block|null $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes = array(), $content = '', $block = null)
{
}
    /**
     * Get the schema for the contentVisibility attribute
     *
     * @return array List of block attributes with type and defaults.
     */
    protected function get_schema_content_visibility()
{
}
    /**
     * Get the schema for the orderby attribute.
     *
     * @return array Property definition of `orderby` attribute.
     */
    protected function get_schema_orderby()
{
}
    /**
     * Get the block's attributes.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return array  Block attributes merged with defaults.
     */
    protected function parse_attributes($attributes)
{
}
    /**
     * Parse query args.
     *
     * @return array
     */
    protected function parse_query_args()
{
}
    /**
     * Parse query args.
     *
     * @param array $query_args Query args.
     */
    protected function set_ordering_query_args(&$query_args)
{
}
    /**
     * Set args specific to this block
     *
     * @param array $query_args Query args.
     */
    abstract protected function set_block_query_args(&$query_args);
    /**
     * Set categories query args.
     *
     * @param array $query_args Query args.
     */
    protected function set_categories_query_args(&$query_args)
{
}
    /**
     * Set visibility query args.
     *
     * @param array $query_args Query args.
     */
    protected function set_visibility_query_args(&$query_args)
{
}
    /**
     * Set which stock status to use when displaying products.
     *
     * @param array $query_args Query args.
     * @return void
     */
    protected function set_stock_status_query_args(&$query_args)
{
}
    /**
     * Works out the item limit based on rows and columns, or returns default.
     *
     * @return int
     */
    protected function get_products_limit()
{
}
    /**
     * Run the query and return an array of product IDs
     *
     * @return array List of product IDs
     */
    protected function get_products()
{
}
    /**
     * Retrieve IDs that are not already present in the cache.
     *
     * Based on WordPress function: _get_non_cached_ids
     *
     * @param int[]  $product_ids Array of IDs.
     * @param string $cache_key  The cache bucket to check against.
     * @return int[] Array of IDs not present in the cache.
     */
    protected function get_non_cached_ids($product_ids, $cache_key)
{
}
    /**
     * Prime query cache of product variation meta data.
     *
     * Prepares values in the product_ID_variation_meta_data cache for later use in the ProductSchema::get_variations()
     * method. Doing so here reduces the total number of queries needed.
     *
     * @param int[] $product_ids Product ids to prime variation cache for.
     */
    protected function prime_product_variations($product_ids)
{
}
    /**
     * Get the list of classes to apply to this block.
     *
     * @return string space-separated list of classes.
     */
    protected function get_container_classes()
{
}
    /**
     * Render a single products.
     *
     * @param \WC_Product $product Product object.
     * @return string Rendered product output.
     */
    protected function render_product($product)
{
}
    /**
     * Get the product image.
     *
     * @param \WC_Product $product Product.
     * @return string
     */
    protected function get_image_html($product)
{
}
    /**
     * Get the product title.
     *
     * @param \WC_Product $product Product.
     * @return string
     */
    protected function get_title_html($product)
{
}
    /**
     * Render the rating icons.
     *
     * @param WC_Product $product Product.
     * @return string Rendered product output.
     */
    protected function get_rating_html($product)
{
}
    /**
     * Get the price.
     *
     * @param \WC_Product $product Product.
     * @return string Rendered product output.
     */
    protected function get_price_html($product)
{
}
    /**
     * Get the sale badge.
     *
     * @param \WC_Product $product Product.
     * @return string Rendered product output.
     */
    protected function get_sale_badge_html($product)
{
}
    /**
     * Get the button.
     *
     * @param \WC_Product $product Product.
     * @return string Rendered product output.
     */
    protected function get_button_html($product)
{
}
    /**
     * Get the "add to cart" button.
     *
     * @param \WC_Product $product Product.
     * @return string Rendered product output.
     */
    protected function get_add_to_cart($product)
{
}
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
    /**
     * Get the frontend style handle for this block type.
     *
     * @return string[]
     */
    protected function get_block_type_style()
{
}
}