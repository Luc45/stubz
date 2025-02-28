<?php

/**
 * WC_Meta_Box_Order_Data Class.
 */
class WC_Meta_Box_Order_Data
{
    /**
     * Billing fields.
     *
     * @var array
     */
    protected static $billing_fields = array();
    /**
     * Shipping fields.
     *
     * @var array
     */
    protected static $shipping_fields = array();
    /**
     * Get billing fields for the meta box.
     *
     * @param \WC_Order $order Order object.
     * @param string    $context Context of fields (view or edit).
     * @return array
     */
    protected static function get_billing_fields($order = \false, $context = 'edit')
    {
    }
    /**
     * Get shipping fields for the meta box.
     *
     * @param \WC_Order $order Order object.
     * @param string    $context Context of fields (view or edit).
     * @return array
     */
    protected static function get_shipping_fields($order = \false, $context = 'edit')
    {
    }
    /**
     * Init billing and shipping fields we display + save. Maintained for backwards compat.
     */
    public static function init_address_fields()
    {
    }
    /**
     * Output the metabox.
     *
     * @param WP_Post|WC_Order $post Post or order object.
     */
    public static function output($post)
    {
    }
    /**
     * Save meta box data.
     *
     * @param int $order_id Order ID.
     * @throws Exception Required request data is missing.
     */
    public static function save($order_id)
    {
    }
}
