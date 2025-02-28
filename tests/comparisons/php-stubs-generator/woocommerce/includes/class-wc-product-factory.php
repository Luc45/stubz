<?php

/**
 * Product factory class.
 */
class WC_Product_Factory
{
    /**
     * Get a product.
     *
     * @param mixed $product_id WC_Product|WP_Post|int|bool $product Product instance, post instance, numeric or false to use global $post.
     * @param array $deprecated Previously used to pass arguments to the factory, e.g. to force a type.
     * @return WC_Product|bool Product object or false if the product cannot be loaded.
     */
    public function get_product($product_id = \false, $deprecated = array())
    {
    }
    /**
     * Gets a product classname and allows filtering. Returns WC_Product_Simple if the class does not exist.
     *
     * @since  3.0.0
     * @param  int    $product_id   Product ID.
     * @param  string $product_type Product type.
     * @return string
     */
    public static function get_product_classname($product_id, $product_type)
    {
    }
    /**
     * Get the product type for a product.
     *
     * @since 3.0.0
     * @param  int $product_id Product ID.
     * @return string|false
     */
    public static function get_product_type($product_id)
    {
    }
    /**
     * Create a WC coding standards compliant class name e.g. WC_Product_Type_Class instead of WC_Product_type-class.
     *
     * @param  string $product_type Product type.
     * @return string|false
     */
    public static function get_classname_from_product_type($product_type)
    {
    }
}
