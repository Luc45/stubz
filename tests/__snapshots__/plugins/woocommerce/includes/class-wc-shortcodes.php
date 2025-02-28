<?php

/**
 * WooCommerce Shortcodes class.
 */
class WC_Shortcodes
{
    /**
     * Init shortcodes.
     */
    public static function init()
{
}
    /**
     * Shortcode Wrapper.
     *
     * @param string[] $function Callback function.
     * @param array    $atts     Attributes. Default to empty array.
     * @param array    $wrapper  Customer wrapper data.
     *
     * @return string
     */
    public static function shortcode_wrapper($function, $atts = array(), $wrapper = array (
  'class' => 'woocommerce',
  'before' => null,
  'after' => null,
))
{
}
    /**
     * Cart page shortcode.
     *
     * @return string
     */
    public static function cart()
{
}
    /**
     * Checkout page shortcode.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function checkout($atts)
{
}
    /**
     * Order tracking page shortcode.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function order_tracking($atts)
{
}
    /**
     * My account page shortcode.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function my_account($atts)
{
}
    /**
     * List products in a category shortcode.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function product_category($atts)
{
}
    /**
     * List all (or limited) product categories.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function product_categories($atts)
{
}
    /**
     * Recent Products shortcode.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function recent_products($atts)
{
}
    /**
     * List multiple products shortcode.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function products($atts)
{
}
    /**
     * Display a single product.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function product($atts)
{
}
    /**
     * Display a single product price + cart button.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function product_add_to_cart($atts)
{
}
    /**
     * Get the add to cart URL for a product.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function product_add_to_cart_url($atts)
{
}
    /**
     * List all products on sale.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function sale_products($atts)
{
}
    /**
     * List best selling products on sale.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function best_selling_products($atts)
{
}
    /**
     * List top rated products on sale.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function top_rated_products($atts)
{
}
    /**
     * Output featured products.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function featured_products($atts)
{
}
    /**
     * Show a single product page.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function product_page($atts)
{
}
    /**
     * Show messages.
     *
     * @return string
     */
    public static function shop_messages()
{
}
    /**
     * Order by rating.
     *
     * @deprecated 3.2.0 Use WC_Shortcode_Products::order_by_rating_post_clauses().
     * @param      array $args Query args.
     * @return     array
     */
    public static function order_by_rating_post_clauses($args)
{
}
    /**
     * List products with an attribute shortcode.
     * Example [product_attribute attribute="color" filter="black"].
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function product_attribute($atts)
{
}
    /**
     * List related products.
     *
     * @param array $atts Attributes.
     * @return string
     */
    public static function related_products($atts)
{
}
}
