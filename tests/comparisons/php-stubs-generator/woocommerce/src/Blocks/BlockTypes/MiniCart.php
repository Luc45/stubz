<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Mini-Cart class.
 *
 * @internal
 */
class MiniCart extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\Utils\BlockHooksTrait;

    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'mini-cart';
    /**
     * Chunks build folder.
     *
     * @var string
     */
    protected $chunks_folder = 'mini-cart-contents-block';
    /**
     * Array of scripts that will be lazy loaded when interacting with the block.
     *
     * @var string[]
     */
    protected $scripts_to_lazy_load = array();
    /**
     *  Inc Tax label.
     *
     * @var string
     */
    protected $tax_label = '';
    /**
     *  Visibility of price including tax.
     *
     * @var string
     */
    protected $display_cart_prices_including_tax = false;
    /**
     * Block Hook API placements.
     *
     * @var array
     */
    protected $hooked_block_placements = array(array('position' => 'after', 'anchor' => 'core/navigation', 'area' => 'header', 'version' => '8.4.0'));
    /**
     * Constructor.
     *
     * @param AssetApi            $asset_api Instance of the asset API.
     * @param AssetDataRegistry   $asset_data_registry Instance of the asset data registry.
     * @param IntegrationRegistry $integration_registry Instance of the integration registry.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry, \Automattic\WooCommerce\Blocks\Integrations\IntegrationRegistry $integration_registry)
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
     * Get the editor script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return array|string;
     */
    protected function get_block_type_editor_script($key = null)
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string
     */
    protected function get_block_type_script($key = null)
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
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = [])
    {
    }
    /**
     * Prints the variable containing information about the scripts to lazy load.
     */
    public function print_lazy_load_scripts()
    {
    }
    /**
     * Returns the script data given its handle.
     *
     * @param string $handle Handle of the script.
     *
     * @return \_WP_Dependency|null Object containing the script data if found, or null.
     */
    protected function get_script_from_handle($handle)
    {
    }
    /**
     * Recursively appends a scripts and its dependencies into the scripts_to_lazy_load array.
     *
     * @param \_WP_Dependency $script Object containing script data.
     */
    protected function append_script_and_deps_src($script)
    {
    }
    /**
     * Returns the markup for the cart price.
     *
     * @param array $attributes Block attributes.
     *
     * @return string
     */
    protected function get_cart_price_markup($attributes)
    {
    }
    /**
     * Returns the markup for render the tax label.
     *
     * @param array $attributes Block attributes.
     *
     * @return string
     */
    protected function get_include_tax_label_markup($attributes)
    {
    }
    /**
     * Append frontend scripts when rendering the Mini-Cart block.
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
     * Render the markup for the Mini-Cart block.
     *
     * @param array $attributes Block attributes.
     *
     * @return string The HTML markup.
     */
    protected function get_markup($attributes)
    {
    }
    /**
     * Return the main instance of WC_Cart class.
     *
     * @return \WC_Cart CartController class instance.
     */
    protected function get_cart_instance()
    {
    }
    /**
     * Get array with data for handle the tax label.
     * the entire logic of this function is was taken from:
     * https://github.com/woocommerce/woocommerce/blob/e730f7463c25b50258e97bf56e31e9d7d3bc7ae7/includes/class-wc-cart.php#L1582
     *
     * @return array;
     */
    protected function get_tax_label()
    {
    }
    /**
     * Prepare translations for inner blocks and dependencies.
     */
    protected function get_inner_blocks_translations()
    {
    }
    /**
     * Register block pattern for Empty Cart Message to make it translatable.
     */
    public function register_empty_cart_message_block_pattern()
    {
    }
    /**
     * Returns whether the Mini-Cart should be rendered or not.
     *
     * @param array $attributes Block attributes.
     *
     * @return bool
     */
    public function should_not_render_mini_cart(array $attributes)
    {
    }
}
