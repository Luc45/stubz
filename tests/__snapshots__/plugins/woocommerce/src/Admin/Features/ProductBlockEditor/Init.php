<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * Loads assets related to the product block editor.
 */
class Init extends \
{
    const EDITOR_CONTEXT_NAME = 'woocommerce/edit-product';

    /**
     * Supported product types.
     *
     * @var array
     */
    private $supported_product_types;

    /**
     * Registered product templates.
     *
     * @var array
     */
    private $product_templates = array(
);

    /**
     * Redirection controller.
     *
     * @var RedirectionController
     */
    private $redirection_controller = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Adds the product template ID to the product if it doesn't exist.
     *
     * @param WP_REST_Response $response The response object.
     * @param WC_Product       $product The product.
     */
    public function possibly_add_template_id($response, $product)
    {
        // stub
    }

    /**
     * Enqueue scripts needed for the product form block editor.
     */
    public function enqueue_scripts()
    {
        // stub
    }

    /**
     * Enqueue styles needed for the rich text editor.
     */
    public function enqueue_styles()
    {
        // stub
    }

    /**
     * Dequeue conflicting styles.
     */
    public function dequeue_conflicting_styles()
    {
        // stub
    }

    /**
     * Update the edit product links when the new experience is enabled.
     *
     * @param string $link    The edit link.
     * @param int    $post_id Post ID.
     * @return string
     */
    public function update_edit_product_link($link, $post_id)
    {
        // stub
    }

    /**
     * Enables variation post type in REST API.
     *
     * @param array $args Array of post type arguments.
     * @return array Array of post type arguments.
     */
    public function enable_rest_api_for_product_variation($args)
    {
        // stub
    }

    /**
     * Adds fields so that we can store user preferences for the variations block.
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public function add_user_data_fields($user_data_fields)
    {
        // stub
    }

    /**
     * Sets the current screen to the block editor if a wc-admin page.
     */
    public function set_current_screen_to_block_editor_if_wc_admin()
    {
        // stub
    }

    /**
     * Get the product editor settings.
     */
    private function get_product_editor_settings()
    {
        // stub
    }

    /**
     * Get default product templates.
     *
     * @return array The default templates.
     */
    private function get_default_product_templates()
    {
        // stub
    }

    /**
     * Create default product template by custom product type if it does not have a
     * template associated yet.
     *
     * @param array $templates The registered product templates.
     * @return array The new templates.
     */
    private function create_default_product_template_by_custom_product_type(array $templates)
    {
        // stub
    }

    /**
     * Register layout templates.
     */
    public function register_layout_templates()
    {
        // stub
    }

    /**
     * Register product templates.
     */
    public function register_product_templates()
    {
        // stub
    }

    /**
     * Register user metas.
     */
    public function register_user_metas()
    {
        // stub
    }

    /**
     * Registers the metadata block attribute for all block types.
     * This is a fallback/temporary solution until
     * the Gutenberg core version registers the metadata attribute.
     *
     * @see https://github.com/WordPress/gutenberg/blob/6aaa3686ae67adc1a6a6b08096d3312859733e1b/lib/compat/wordpress-6.5/blocks.php#L27-L47
     * To do: Remove this method once the Gutenberg core version registers the metadata attribute.
     *
     * @param array $args Array of arguments for registering a block type.
     * @return array $args
     */
    public function register_metadata_attribute($args)
    {
        // stub
    }

    /**
     * Filters woocommerce block types.
     *
     * @param string[] $block_types Array of woocommerce block types.
     * @return array
     */
    public function get_block_types($block_types)
    {
        // stub
    }

}

