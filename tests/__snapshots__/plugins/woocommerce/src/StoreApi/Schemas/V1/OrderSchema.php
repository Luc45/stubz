<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * OrderSchema class.
 */
class OrderSchema
{
    const IDENTIFIER = 'order';

    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'order';

    /**
     * Item schema instance.
     *
     * @var OrderItemSchema
     */
    public $item_schema = null;

    /**
     * Order controller class instance.
     *
     * @var OrderController
     */
    protected $order_controller = null;

    /**
     * Coupon schema instance.
     *
     * @var OrderCouponSchema
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
     * @var OrderFeeSchema
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
     * Order schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
        // stub
    }

    /**
     * Get an order for response.
     *
     * @param \WC_Order $order Order instance.
     * @return array
     */
    public function get_item_response($order)
    {
        // stub
    }

    /**
     * Get total data.
     *
     * @param \WC_Order $order Order instance.
     * @return array
     */
    protected function get_totals($order)
    {
        // stub
    }

}