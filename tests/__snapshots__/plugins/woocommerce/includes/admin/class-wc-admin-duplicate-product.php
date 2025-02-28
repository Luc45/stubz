<?php
/**
 * WC_Admin_Duplicate_Product Class.
 */
class WC_Admin_Duplicate_Product
{
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Show the "Duplicate" link in admin products list.
     *
     * @param array   $actions Array of actions.
     * @param WP_Post $post Post object.
     * @return array
     */
    public function dupe_link($actions, $post)
{
}
    /**
     * Show the dupe product link in admin.
     */
    public function dupe_button()
{
}
    /**
     * Duplicate a product action.
     */
    public function duplicate_product_action()
{
}
    /**
     * Function to create the duplicate of the product.
     *
     * @param WC_Product $product The product to duplicate.
     * @return WC_Product The duplicate.
     */
    public function product_duplicate($product)
{
}
    /**
     * Get a product from the database to duplicate.
     *
     * @deprecated 3.0.0
     * @param mixed $id The ID of the product to duplicate.
     * @return object|bool
     * @see duplicate_product
     */
    private function get_product_to_duplicate($id)
{
}
    /**
     * Generates a unique slug for a given product. We do this so that we can override the
     * behavior of wp_unique_post_slug(). The normal slug generation will run single
     * select queries on every non-unique slug, resulting in very bad performance.
     *
     * @param WC_Product $product The product to generate a slug for.
     * @since 3.9.0
     */
    private function generate_unique_slug($product)
{
}
}
