<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\ProductCollection;

/**
 * Controller class.
 */
class Controller extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-collection';

    /**
     * Instance of HandlerRegistry.
     *
     * @var HandlerRegistry
     */
    protected $collection_handler_registry = null;

    /**
     * Instance of QueryBuilder.
     *
     * @var QueryBuilder
     */
    protected $query_builder = null;

    /**
     * Instance of Renderer.
     *
     * @var Renderer
     */
    protected $renderer = null;

    /**
     * Initialize this block type.
     *
     * - Register hooks and filters.
     * - Set up QueryBuilder, Renderer and HandlerRegistry.
     */
    protected function initialize()
{
}
    /**
     * Add interactivity to the Product Title block within Product Collection.
     * This enables the triggering of a custom event when the product title is clicked.
     *
     * @param string    $block_content The block content.
     * @param array     $block         The full block, including name and attributes.
     * @param \WP_Block $instance      The block instance.
     * @return string   Modified block content with added interactivity.
     */
    public function add_product_title_click_event_directives($block_content, $block, $instance)
{
}
    /**
     * Verifies if the inner block is compatible with Interactivity API.
     *
     * @param string $block_name Name of the block to verify.
     * @return boolean
     */
    private function is_block_compatible($block_name)
{
}
    /**
     * Check inner blocks of Product Collection block if there's one
     * incompatible with the Interactivity API and if so, disable client-side
     * navigation.
     *
     * @param array $parsed_block The block being rendered.
     * @return string Returns the parsed block, unmodified.
     */
    public function disable_enhanced_pagination($parsed_block)
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
     * Update the query for the product query block in Editor.
     *
     * @param array           $query   Query args.
     * @param WP_REST_Request $request Request.
     */
    public function update_rest_query_in_editor($query, $request): array
{
}
    /**
     * Add support for filter blocks:
     * - Price filter block
     * - Attributes filter block
     * - Rating filter block
     * - In stock filter block etc.
     *
     * @param array $pre_render   The pre-rendered block.
     * @param array $parsed_block The parsed block.
     */
    public function add_support_for_filter_blocks($pre_render, $parsed_block)
{
}
    /**
     * Return a custom query based on attributes, filters and global WP_Query.
     *
     * @param WP_Query $query The WordPress Query.
     * @param WP_Block $block The block being rendered.
     * @param int      $page  The page number.
     *
     * @return array
     */
    public function build_frontend_query($query, $block, $page)
{
}
    /**
     * Extends allowed `collection_params` for the REST API
     *
     * By itself, the REST API doesn't accept custom `orderby` values,
     * even if they are supported by a custom post type.
     *
     * @param array $params  A list of allowed `orderby` values.
     *
     * @return array
     */
    public function extend_rest_query_allowed_params($params)
{
}
    /**
     * Registers core collections and sets the handler store.
     */
    protected function register_core_collections_and_set_handler_store()
{
}
}