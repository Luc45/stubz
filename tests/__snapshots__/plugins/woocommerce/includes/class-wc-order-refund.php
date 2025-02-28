<?php
/**
 * Order refund class.
 */
class WC_Order_Refund extends \WC_Abstract_Order
{
    /**
     * Which data store to load.
     *
     * @var string
     */
    protected $data_store_name = 'order-refund';
    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'order_refund';
    /**
     * Stores product data.
     *
     * @var array
     */
    protected $extra_data = array(
'amount' => '',
'reason' => '',
'refunded_by' => 0,
'refunded_payment' => false
);
    /**
     * List of properties that were earlier managed by data store. However, since DataStore is a not a stored entity in itself, they used to store data in metadata of the data object.
     * With custom tables, some of these are moved from metadata to their own columns, but existing code will still try to add them to metadata. This array is used to keep track of such properties.
     *
     * Only reason to add a property here is that you are moving properties from DataStore instance to data object. Otherwise, if you are adding a new property, consider adding it to $data array instead.
     *
     * @var array
     */
    protected $legacy_datastore_props = array(
'_refund_amount',
'_refund_reason',
'_refunded_by',
'_refunded_payment'
);
    /**
     * Get internal type (post type.)
     *
     * @return string
     */
    public function get_type()
{
}
    /**
     * Get status - always completed for refunds.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_status($context = 'view')
{
}
    /**
     * Get a title for the new post type.
     */
    public function get_post_title()
{
}
    /**
     * Get refunded amount.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int|float
     */
    public function get_amount($context = 'view')
{
}
    /**
     * Get refund reason.
     *
     * @since 2.2
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_reason($context = 'view')
{
}
    /**
     * Get ID of user who did the refund.
     *
     * @since 3.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_refunded_by($context = 'view')
{
}
    /**
     * Return if the payment was refunded via API.
     *
     * @since  3.3
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return bool
     */
    public function get_refunded_payment($context = 'view')
{
}
    /**
     * Get formatted refunded amount.
     *
     * @since 2.4
     * @return string
     */
    public function get_formatted_refund_amount()
{
}
    /**
     * Set refunded amount.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception Exception if the amount is invalid.
     */
    public function set_amount($value)
{
}
    /**
     * Set refund reason.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception Exception if the amount is invalid.
     */
    public function set_reason($value)
{
}
    /**
     * Set refunded by.
     *
     * @param int $value Value to set.
     * @throws WC_Data_Exception Exception if the amount is invalid.
     */
    public function set_refunded_by($value)
{
}
    /**
     * Set if the payment was refunded via API.
     *
     * @since 3.3
     * @param bool $value Value to set.
     */
    public function set_refunded_payment($value)
{
}
    /**
     * Magic __get method for backwards compatibility.
     *
     * @param string $key Value to get.
     * @return mixed
     */
    public function __get($key)
{
}
    /**
     * Gets an refund from the database.
     *
     * @deprecated 3.0
     * @param int $id (default: 0).
     * @return bool
     */
    public function get_refund($id = 0)
{
}
    /**
     * Get refund amount.
     *
     * @deprecated 3.0
     * @return int|float
     */
    public function get_refund_amount()
{
}
    /**
     * Get refund reason.
     *
     * @deprecated 3.0
     * @return string
     */
    public function get_refund_reason()
{
}
}
