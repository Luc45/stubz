<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * Woo Cart Controller class.
 *
 * Helper class to bridge the gap between the cart API and Woo core.
 */
class CartController
{
    use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
    /**
     * Makes the cart and sessions available to a route by loading them from core.
     */
    public function load_cart()
    {
    }
    /**
     * Normalizes the cart by fixing any quantity violations.
     */
    public function normalize_cart()
    {
    }
    /**
     * Gets the latest cart instance, and ensures totals have been calculated before returning.
     *
     * @return \WC_Cart
     */
    public function get_cart_for_response()
    {
    }
    /**
     * Recalculates the cart totals and returns the updated cart instance.
     *
     * @since 9.2.0 Calculate shipping was removed here because it's called already by calculate_totals.
     *
     * @return \WC_Cart
     */
    public function calculate_totals()
    {
    }
    /**
     * Based on the core cart class but returns errors rather than rendering notices directly.
     *
     * @todo Overriding the core add_to_cart method was necessary because core outputs notices when an item is added to
     * the cart. For us this would cause notices to build up and output on the store, out of context. Core would need
     * refactoring to split notices out from other cart actions.
     *
     * @throws RouteException Exception if invalid data is detected.
     *
     * @param array $request Add to cart request params.
     * @return string
     */
    public function add_to_cart($request)
    {
    }
    /**
     * Based on core `set_quantity` method, but validates if an item is sold individually first and enforces any limits in
     * place.
     *
     * @throws RouteException Exception if invalid data is detected.
     *
     * @param string  $item_id Cart item id.
     * @param integer $quantity Cart quantity.
     */
    public function set_cart_item_quantity($item_id, $quantity = 1)
    {
    }
    /**
     * Validate all items in the cart and check for errors.
     *
     * @throws RouteException Exception if invalid data is detected.
     *
     * @param \WC_Product $product Product object associated with the cart item.
     * @param array       $request Add to cart request params.
     */
    public function validate_add_to_cart(\WC_Product $product, $request)
    {
    }
    /**
     * Validate cart and check for errors.
     *
     * @throws InvalidCartException Exception if invalid data is detected in the cart.
     */
    public function validate_cart()
    {
    }
    /**
     * When placing an order, validate that the cart is not empty.
     *
     * @throws InvalidCartException Exception if the cart is empty.
     */
    public function validate_cart_not_empty()
    {
    }
    /**
     * Validate all items in the cart and check for errors.
     *
     * @throws InvalidCartException Exception if invalid data is detected due to insufficient stock levels.
     */
    public function validate_cart_items()
    {
    }
    /**
     * Validates an existing cart item and returns any errors.
     *
     * @throws TooManyInCartException Exception if more than one product that can only be purchased individually is in
     * the cart.
     * @throws PartialOutOfStockException Exception if an item has a quantity greater than what is available in stock.
     * @throws OutOfStockException Exception thrown when an item is entirely out of stock.
     * @throws NotPurchasableException Exception thrown when an item is not purchasable.
     * @param array $cart_item Cart item array.
     */
    public function validate_cart_item($cart_item)
    {
    }
    /**
     * Validate all coupons in the cart and check for errors.
     *
     * @throws InvalidCartException Exception if invalid data is detected.
     */
    public function validate_cart_coupons()
    {
    }
    /**
     * Validate the cart and get a list of errors.
     *
     * @return WP_Error A WP_Error instance containing the cart's errors.
     */
    public function get_cart_errors()
    {
    }
    /**
     * Get main instance of cart class.
     *
     * @throws RouteException When cart cannot be loaded.
     * @return \WC_Cart
     */
    public function get_cart_instance()
    {
    }
    /**
     * Return a cart item from the woo core cart class.
     *
     * @param string $item_id Cart item id.
     * @return array
     */
    public function get_cart_item($item_id)
    {
    }
    /**
     * Returns all cart items.
     *
     * @param callable $callback Optional callback to apply to the array filter.
     * @return array
     */
    public function get_cart_items($callback = null)
    {
    }
    /**
     * Get hashes for items in the current cart. Useful for tracking changes.
     *
     * @return array
     */
    public function get_cart_hashes()
    {
    }
    /**
     * Empty cart contents.
     */
    public function empty_cart()
    {
    }
    /**
     * See if cart has applied coupon by code.
     *
     * @param string $coupon_code Cart coupon code.
     * @return bool
     */
    public function has_coupon($coupon_code)
    {
    }
    /**
     * Returns all applied coupons.
     *
     * @param callable $callback Optional callback to apply to the array filter.
     * @return array
     */
    public function get_cart_coupons($callback = null)
    {
    }
    /**
     * Get shipping packages from the cart with calculated shipping rates.
     *
     * @todo this can be refactored once https://github.com/woocommerce/woocommerce/pull/26101 lands.
     *
     * @param bool $calculate_rates Should rates for the packages also be returned.
     * @return array
     */
    public function get_shipping_packages($calculate_rates = true)
    {
    }
    /**
     * Creates a name for a package.
     *
     * @param array $package Shipping package from WooCommerce.
     * @param int   $index Package number.
     * @return string
     */
    protected function get_package_name($package, $index)
    {
    }
    /**
     * Selects a shipping rate.
     *
     * @param int|string $package_id ID of the package to choose a rate for.
     * @param string     $rate_id ID of the rate being chosen.
     */
    public function select_shipping_rate($package_id, $rate_id)
    {
    }
    /**
     * Based on the core cart class but returns errors rather than rendering notices directly.
     *
     * @todo Overriding the core apply_coupon method was necessary because core outputs notices when a coupon gets
     * applied. For us this would cause notices to build up and output on the store, out of context. Core would need
     * refactoring to split notices out from other cart actions.
     *
     * @throws RouteException Exception if invalid data is detected.
     *
     * @param string $coupon_code Coupon code.
     */
    public function apply_coupon($coupon_code)
    {
    }
    /**
     * Validates an existing cart coupon and returns any errors.
     *
     * @param \WC_Coupon $coupon Coupon object applied to the cart.
     *
     * @throws RouteException Exception if invalid data is detected.
     */
    protected function validate_cart_coupon(\WC_Coupon $coupon)
    {
    }
    /**
     * Gets the qty of a product across line items.
     *
     * @param \WC_Product $product Product object.
     * @return int
     */
    protected function get_product_quantity_in_cart($product)
    {
    }
    /**
     * Gets remaining stock for a product.
     *
     * @param \WC_Product $product Product object.
     * @return int
     */
    protected function get_remaining_stock_for_product($product)
    {
    }
    /**
     * Get a product object to be added to the cart.
     *
     * @throws RouteException Exception if invalid data is detected.
     *
     * @param array $request Add to cart request params.
     * @return \WC_Product|Error Returns a product object if purchasable.
     */
    protected function get_product_for_cart($request)
    {
    }
    /**
     * For a given product, get the product ID.
     *
     * @param \WC_Product $product Product object associated with the cart item.
     * @return int
     */
    protected function get_product_id(\WC_Product $product)
    {
    }
    /**
     * For a given product, get the variation ID.
     *
     * @param \WC_Product $product Product object associated with the cart item.
     * @return int
     */
    protected function get_variation_id(\WC_Product $product)
    {
    }
    /**
     * Default exception thrown when an item cannot be added to the cart.
     *
     * @throws RouteException Exception with code woocommerce_rest_product_not_purchasable.
     *
     * @param \WC_Product $product Product object associated with the cart item.
     */
    protected function throw_default_product_exception(\WC_Product $product)
    {
    }
    /**
     * Filter data for add to cart requests.
     *
     * @param array $request Add to cart request params.
     * @return array Updated request array.
     */
    protected function filter_request_data($request)
    {
    }
    /**
     * If variations are set, validate and format the values ready to add to the cart.
     *
     * @throws RouteException Exception if invalid data is detected.
     *
     * @param array $request Add to cart request params.
     * @return array Updated request array.
     */
    protected function parse_variation_data($request)
    {
    }
    /**
     * Try to match request data to a variation ID and return the ID.
     *
     * @throws RouteException Exception if variation cannot be found.
     *
     * @param array       $request Add to cart request params.
     * @param \WC_Product $product Product being added to the cart.
     * @return int Matching variation ID.
     */
    protected function get_variation_id_from_variation_data($request, $product)
    {
    }
    /**
     * Format and sanitize variation data posted to the API.
     *
     * Labels are converted to names (e.g. Size to pa_size), and values are cleaned.
     *
     * @throws RouteException Exception if variation cannot be found.
     *
     * @param array $variation_data Key value pairs of attributes and values.
     * @param array $variable_product_attributes Product attributes we're expecting.
     * @return array
     */
    protected function sanitize_variation_data($variation_data, $variable_product_attributes)
    {
    }
    /**
     * Get product attributes from the variable product (which may be the parent if the product object is a variation).
     *
     * @throws RouteException Exception if product is invalid.
     *
     * @param \WC_Product $product Product being added to the cart.
     * @return array
     */
    protected function get_variable_product_attributes($product)
    {
    }
}