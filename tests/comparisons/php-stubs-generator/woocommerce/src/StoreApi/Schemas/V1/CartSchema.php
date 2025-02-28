<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * CartSchema class.
 */
class CartSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'cart';
    /**
     * Item schema instance.
     *
     * @var CartItemSchema
     */
    public $item_schema;
    /**
     * Coupon schema instance.
     *
     * @var CartCouponSchema
     */
    public $coupon_schema;
    /**
     * Product item schema instance representing cross-sell items.
     *
     * @var ProductSchema
     */
    public $cross_sells_item_schema;
    /**
     * Fee schema instance.
     *
     * @var CartFeeSchema
     */
    public $fee_schema;
    /**
     * Shipping rates schema instance.
     *
     * @var CartShippingRateSchema
     */
    public $shipping_rate_schema;
    /**
     * Shipping address schema instance.
     *
     * @var ShippingAddressSchema
     */
    public $shipping_address_schema;
    /**
     * Billing address schema instance.
     *
     * @var BillingAddressSchema
     */
    public $billing_address_schema;
    /**
     * Error schema instance.
     *
     * @var ErrorSchema
     */
    public $error_schema;
    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend Rest Extending instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
    {
    }
    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a woo cart into an object suitable for the response.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    public function get_item_response($cart)
    {
    }
    /**
     * Get total data.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    protected function get_totals($cart)
    {
    }
    /**
     * Get tax lines from the cart and format to match schema.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    protected function get_tax_lines($cart)
    {
    }
    /**
     * Get cart validation errors.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    protected function get_cart_errors($cart)
    {
    }
}