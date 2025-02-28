<?php
/**
 * WC Order Refund Data Store: Stored in CPT.
 *
 * @version  3.0.0
 */
class WC_Order_Refund_Data_Store_CPT extends \Abstract_WC_Order_Data_Store_CPT implements \WC_Object_Data_Store_Interface, \WC_Order_Refund_Data_Store_Interface
{
    /**
     * Data stored in meta keys, but not considered "meta" for an order.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array (
  0 => '_order_currency',
  1 => '_cart_discount',
  2 => '_refund_amount',
  3 => '_refunded_by',
  4 => '_refunded_payment',
  5 => '_refund_reason',
  6 => '_cart_discount_tax',
  7 => '_order_shipping',
  8 => '_order_shipping_tax',
  9 => '_order_tax',
  10 => '_order_total',
  11 => '_order_version',
  12 => '_prices_include_tax',
  13 => '_payment_tokens',
);
    /**
     * Delete a refund - no trash is supported.
     *
     * @param WC_Order $order Order object.
     * @param array    $args Array of args to pass to the delete method.
     */
    public function delete(&$order, $args = array())
{
}
    /**
     * Read refund data. Can be overridden by child classes to load other props.
     *
     * @param WC_Order_Refund $refund Refund object.
     * @param object          $post_object Post object.
     * @since 3.0.0
     */
    protected function read_order_data(&$refund, $post_object)
{
}
    /**
     * Helper method that updates all the post meta for an order based on it's settings in the WC_Order class.
     *
     * @param WC_Order_Refund $refund Refund object.
     *
     * @since 3.0.0
     */
    protected function update_post_meta(&$refund)
{
}
    /**
     * Get a title for the new post type.
     *
     * @return string
     */
    protected function get_post_title()
{
}
}
