<?php

namespace ;

/**
 * This class adds actions to track usage of WooCommerce Products.
 */
class WC_Products_Tracking
{
    const TRACKS_SOURCE = 'product-legacy-editor';

    /**
     * Init tracking.
     */
    public function init()
    {
        // stub
    }

    /**
     * Send a Tracks event when the Products page is viewed.
     */
    public function track_products_view()
    {
        // stub
    }

    /**
     * Send a Tracks event when the Products Categories and Tags page is viewed.
     */
    public function track_categories_and_tags_view()
    {
        // stub
    }

    /**
     * Send a Tracks event when a product is updated.
     *
     * @param int    $product_id Product id.
     * @param object $post       WordPress post.
     */
    public function track_product_updated($product_id, $post)
    {
        // stub
    }

    /**
     * Track the Update button being clicked on the client side.
     * This is needed because `track_product_updated` (using the `edit_post`
     * hook) is called in response to a number of other triggers.
     *
     * @param WP_Post $post The post, not used.
     */
    public function track_product_updated_client_side($post)
    {
        // stub
    }

    /**
     * Get the IDs of the possible product type options.
     *
     * @return array
     */
    private static function get_possible_product_type_options_ids()
    {
        // stub
    }

    /**
     * Get the product type options for a product.
     *
     * @param int $post_id The ID of the product.
     *
     * @return array
     */
    private static function get_product_type_options($post_id)
    {
        // stub
    }

    /**
     * Get a comma-separated string of the product type options that are enabled.
     *
     * @param array $product_type_options The product type options.
     *
     * @return string
     */
    private static function get_product_type_options_string($product_type_options)
    {
        // stub
    }

    /**
     * Send a Tracks event when a product is published.
     *
     * @param int          $post_id     Post ID.
     * @param WP_Post      $post        Post object.
     * @param bool         $update      Whether this is an existing post being updated.
     * @param null|WP_Post $post_before Null for new posts, the WP_Post object prior
     *                                  to the update for updated posts.
     */
    public function track_product_published($post_id, $post, $update, $post_before)
    {
        // stub
    }

    /**
     * Send a Tracks event when a product category is created.
     *
     * @param int $category_id Category ID.
     */
    public function track_product_category_created($category_id)
    {
        // stub
    }

    /**
     * Send a Tracks event when a product category is updated.
     *
     * @param int $category_id Category ID.
     */
    public function track_product_category_updated($category_id)
    {
        // stub
    }

    /**
     * Adds the tracking scripts for product filtering actions.
     *
     * @param string $hook Hook of the current page.
     * @return string|boolean
     */
    protected function get_product_screen($hook)
    {
        // stub
    }

    /**
     * Adds the tracking scripts for product filtering actions.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_product_tracking_scripts($hook)
    {
        // stub
    }

    /**
     * Adds the tracking scripts for product setting pages.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_product_import_scripts($hook)
    {
        // stub
    }

    /**
     * Adds the tracking scripts for product attributes filtering actions.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_attribute_tracking_scripts($hook)
    {
        // stub
    }

    /**
     * Adds the tracking scripts for tags and categories filtering actions.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_tag_tracking_scripts($hook)
    {
        // stub
    }

    /**
     * Check if the current process is importing products.
     *
     * @return bool True if importing, false otherwise.
     */
    private function is_importing()
    {
        // stub
    }

}

