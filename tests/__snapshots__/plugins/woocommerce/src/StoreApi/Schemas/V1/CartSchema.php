<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * CartSchema class.
 */
class CartSchema
{
    const IDENTIFIER = 'cart';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'cart';

    /**
     * Item schema instance.
     *
     * @var CartItemSchema
     */
    public $item_schema = null;

    /**
     * Coupon schema instance.
     *
     * @var CartCouponSchema
     */
    public $coupon_schema = null;

    /**
     * Product item schema instance representing cross-sell items.
     *
     * @var ProductSchema
     */
    public $cross_sells_item_schema = null;

    /**
     * Fee schema instance.
     *
     * @var CartFeeSchema
     */
    public $fee_schema = null;

    /**
     * Shipping rates schema instance.
     *
     * @var CartShippingRateSchema
     */
    public $shipping_rate_schema = null;

    /**
     * Shipping address schema instance.
     *
     * @var ShippingAddressSchema
     */
    public $shipping_address_schema = null;

    /**
     * Billing address schema instance.
     *
     * @var BillingAddressSchema
     */
    public $billing_address_schema = null;

    /**
     * Error schema instance.
     *
     * @var ErrorSchema
     */
    public $error_schema = null;

    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend Rest Extending instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, Automattic\WooCommerce\StoreApi\SchemaController $controller)
    {
        // stub
    }

    /**
     * Cart schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
        // stub
    }

    /**
     * Convert a woo cart into an object suitable for the response.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    public function get_item_response($cart)
    {
        // stub
    }

    /**
     * Get total data.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    protected function get_totals($cart)
    {
        // stub
    }

    /**
     * Get tax lines from the cart and format to match schema.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    protected function get_tax_lines($cart)
    {
        // stub
    }

    /**
     * Get cart validation errors.
     *
     * @param \WC_Cart $cart Cart class instance.
     * @return array
     */
    protected function get_cart_errors($cart)
    {
        // stub
    }

}

