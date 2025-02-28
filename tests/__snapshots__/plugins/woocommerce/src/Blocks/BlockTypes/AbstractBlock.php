<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AbstractBlock class.
 */
abstract class AbstractBlock
{
    /**
     * Block namespace.
     *
     * @var string
     */
    protected $namespace = 'woocommerce';
    /**
     * Block name within this namespace.
     *
     * @var string
     */
    protected $block_name = '';
    /**
     * Tracks if assets have been enqueued.
     *
     * @var boolean
     */
    protected $enqueued_assets = false;
    /**
     * Instance of the asset API.
     *
     * @var AssetApi
     */
    protected $asset_api = null;
    /**
     * Instance of the asset data registry.
     *
     * @var AssetDataRegistry
     */
    protected $asset_data_registry = null;
    /**
     * Instance of the integration registry.
     *
     * @var IntegrationRegistry
     */
    protected $integration_registry = null;
    /**
     * Constructor.
     *
     * @param AssetApi            $asset_api Instance of the asset API.
     * @param AssetDataRegistry   $asset_data_registry Instance of the asset data registry.
     * @param IntegrationRegistry $integration_registry Instance of the integration registry.
     * @param string              $block_name Optionally set block name during construct.
     */
    public function __construct(Automattic\WooCommerce\Blocks\Assets\Api $asset_api, Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry, Automattic\WooCommerce\Blocks\Integrations\IntegrationRegistry $integration_registry, $block_name = '')
{
}
    /**
     * Get the interactivity namespace. Only used when utilizing the interactivity API.
     * @return string The interactivity namespace, used to namespace interactivity API actions and state.
     */
    protected function get_full_block_name()
{
}
    /**
     * The default render_callback for all blocks. This will ensure assets are enqueued just in time, then render
     * the block (if applicable).
     *
     * @param array|WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
     * @param string         $content    Block content. Default empty string.
     * @param WP_Block|null  $block      Block instance.
     * @return string Rendered block type output.
     */
    public function render_callback($attributes = array(), $content = '', $block = null)
{
}
    /**
     * Enqueue assets used for rendering the block in editor context.
     *
     * This is needed if a block is not yet within the post content--`render` and `enqueue_assets` may not have ran.
     */
    public function enqueue_editor_assets()
{
}
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     */
    protected function initialize()
{
}
    /**
     * Register script and style assets for the block type before it is registered.
     *
     * This registers the scripts; it does not enqueue them.
     */
    protected function register_block_type_assets()
{
}
    /**
     * Injects Chunk Translations into the page so translations work for lazy loaded components.
     *
     * The chunk names are defined when creating lazy loaded components using webpackChunkName.
     *
     * @param string[] $chunks Array of chunk names.
     */
    protected function register_chunk_translations($chunks)
{
}
    /**
     * Generate an array of chunks paths for loading translation.
     *
     * @param string $chunks_folder The folder to iterate over.
     * @return string[] $chunks list of chunks to load.
     */
    protected function get_chunks_paths($chunks_folder)
{
}
    /**
     * Registers the block type with WordPress.
     *
     * @return string[] Chunks paths.
     */
    protected function register_block_type()
{
}
    /**
     * Get the block type.
     *
     * @return string
     */
    protected function get_block_type()
{
}
    /**
     * Get the render callback for this block type.
     *
     * Dynamic blocks should return a callback, for example, `return [ $this, 'render' ];`
     *
     * @see $this->register_block_type()
     * @return callable|null;
     */
    protected function get_block_type_render_callback()
{
}
    /**
     * Get the editor script data for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string
     */
    protected function get_block_type_editor_script($key = null)
{
}
    /**
     * Get the editor style handle for this block type.
     *
     * @see $this->register_block_type()
     * @return string|null
     */
    protected function get_block_type_editor_style()
{
}
    /**
     * Get the frontend script handle for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string|null
     */
    protected function get_block_type_script($key = null)
{
}
    /**
     * Get the frontend style handle for this block type.
     *
     * @return string[]|null
     */
    protected function get_block_type_style()
{
}
    /**
     * Get the supports array for this block type.
     *
     * @see $this->register_block_type()
     * @return string;
     */
    protected function get_block_type_supports()
{
}
    /**
     * Get block attributes.
     *
     * @return array;
     */
    protected function get_block_type_attributes()
{
}
    /**
     * Get block usesContext.
     *
     * @return array;
     */
    protected function get_block_type_uses_context()
{
}
    /**
     * Parses block attributes from the render_callback.
     *
     * @param array|WP_Block $attributes Block attributes, or an instance of a WP_Block. Defaults to an empty array.
     * @return array
     */
    protected function parse_render_callback_attributes($attributes)
{
}
    /**
     * Render the block. Extended by children.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
{
}
    /**
     * Enqueue frontend assets for this block, just in time for rendering.
     *
     * @internal This prevents the block script being enqueued on all pages. It is only enqueued as needed. Note that
     * we intentionally do not pass 'script' to register_block_type.
     *
     * @param array    $attributes  Any attributes that currently are available from the block.
     * @param string   $content    The block content.
     * @param WP_Block $block    The block object.
     */
    protected function enqueue_assets(array $attributes, $content, $block)
{
}
    /**
     * Data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = array())
{
}
    /**
     * Get routes from a REST API namespace.
     *
     * @param string $namespace Namespace to retrieve.
     * @return array
     */
    protected function get_routes_from_namespace($namespace)
{
}
    /**
     * Register/enqueue scripts used for this block on the frontend, during render.
     *
     * @param array $attributes Any attributes that currently are available from the block.
     */
    protected function enqueue_scripts(array $attributes = array())
{
}
}