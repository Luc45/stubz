<?php

/**
 * Checkout class.
 */
class WC_Checkout
{
    use \Automattic\WooCommerce\Internal\CostOfGoodsSold\CogsAwareTrait;

    /**
     * The single instance of the class.
     *
     * @var WC_Checkout|null
     */
    protected static $instance = \null;
    /**
     * Checkout fields are stored here.
     *
     * @var array|null
     */
    protected $fields = \null;
    /**
     * Holds posted data for backwards compatibility.
     *
     * @var array
     */
    protected $legacy_posted_data = array();
    /**
     * Gets the main WC_Checkout Instance.
     *
     * @since 2.1
     * @static
     * @return WC_Checkout Main instance
     */
    public static function instance()
    {
    }
    /**
     * See if variable is set. Used to support legacy public variables which are no longer defined.
     *
     * @param string $key Key.
     * @return bool
     */
    public function __isset($key)
    {
    }
    /**
     * Sets the legacy public variables for backwards compatibility.
     *
     * @param string $key   Key.
     * @param mixed  $value Value.
     */
    public function __set($key, $value)
    {
    }
    /**
     * Gets the legacy public variables for backwards compatibility.
     *
     * @param string $key Key.
     * @return array|string
     */
    public function __get($key)
    {
    }
    /**
     * Cloning is forbidden.
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     */
    public function __wakeup()
    {
    }
    /**
     * Is registration required to checkout?
     *
     * @since  3.0.0
     * @return boolean
     */
    public function is_registration_required()
    {
    }
    /**
     * Is registration enabled on the checkout page?
     *
     * @since  3.0.0
     * @return boolean
     */
    public function is_registration_enabled()
    {
    }
    /**
     * Initialize the checkout fields.
     */
    protected function initialize_checkout_fields()
    {
    }
    /**
     * Get an array of checkout fields.
     *
     * @param  string $fieldset to get.
     * @return array
     */
    public function get_checkout_fields($fieldset = '')
    {
    }
    /**
     * When we process the checkout, lets ensure cart items are rechecked to prevent checkout.
     */
    public function check_cart_items()
    {
    }
    /**
     * Output the billing form.
     */
    public function checkout_form_billing()
    {
    }
    /**
     * Output the shipping form.
     */
    public function checkout_form_shipping()
    {
    }
    /**
     * Create an order. Error codes:
     *      520 - Cannot insert order into the database.
     *      521 - Cannot get order after creation.
     *      522 - Cannot update order.
     *      525 - Cannot create line item.
     *      526 - Cannot create fee item.
     *      527 - Cannot create shipping item.
     *      528 - Cannot create tax item.
     *      529 - Cannot create coupon item.
     *
     * @throws Exception When checkout validation fails.
     * @param  array $data Posted data.
     * @return int|WP_ERROR
     */
    public function create_order($data)
    {
    }
    /**
     * Copy line items, tax, totals data from cart to order.
     *
     * @param WC_Order $order Order object.
     *
     * @throws Exception When unable to create order.
     */
    public function set_data_from_cart(&$order)
    {
    }
    /**
     * Add line items to the order.
     *
     * @param WC_Order $order Order instance.
     * @param WC_Cart  $cart  Cart instance.
     */
    public function create_order_line_items(&$order, $cart)
    {
    }
    /**
     * Add fees to the order.
     *
     * @param WC_Order $order Order instance.
     * @param WC_Cart  $cart  Cart instance.
     */
    public function create_order_fee_lines(&$order, $cart)
    {
    }
    /**
     * Add shipping lines to the order.
     *
     * @param WC_Order $order                   Order Instance.
     * @param array    $chosen_shipping_methods Chosen shipping methods.
     * @param array    $packages                Packages.
     */
    public function create_order_shipping_lines(&$order, $chosen_shipping_methods, $packages)
    {
    }
    /**
     * Add tax lines to the order.
     *
     * @param WC_Order $order Order instance.
     * @param WC_Cart  $cart  Cart instance.
     */
    public function create_order_tax_lines(&$order, $cart)
    {
    }
    /**
     * Add coupon lines to the order.
     *
     * @param WC_Order $order Order instance.
     * @param WC_Cart  $cart  Cart instance.
     */
    public function create_order_coupon_lines(&$order, $cart)
    {
    }
    /**
     * See if a fieldset should be skipped.
     *
     * @since 3.0.0
     * @param string $fieldset_key Fieldset key.
     * @param array  $data         Posted data.
     * @return bool
     */
    protected function maybe_skip_fieldset($fieldset_key, $data)
    {
    }
    /**
     * Get posted data from the checkout form.
     *
     * @since  3.1.0
     * @return array of data.
     */
    public function get_posted_data()
    {
    }
    /**
     * Validates the posted checkout data based on field properties.
     *
     * @since  3.0.0
     * @param  array    $data   An array of posted data.
     * @param  WP_Error $errors Validation error.
     */
    protected function validate_posted_data(&$data, &$errors)
    {
    }
    /**
     * Validates that the checkout has enough info to proceed.
     *
     * @since  3.0.0
     * @param  array    $data   An array of posted data.
     * @param  WP_Error $errors Validation errors.
     */
    protected function validate_checkout(&$data, &$errors)
    {
    }
    /**
     * Set address field for customer.
     *
     * @since 3.0.7
     * @param string $field String to update.
     * @param string $key   Field key.
     * @param array  $data  Array of data to get the value from.
     */
    protected function set_customer_address_fields($field, $key, $data)
    {
    }
    /**
     * Update customer and session data from the posted checkout data.
     *
     * @since 3.0.0
     * @param array $data Posted data.
     */
    protected function update_session($data)
    {
    }
    /**
     * Process an order that does require payment.
     *
     * @since 3.0.0
     * @param int    $order_id       Order ID.
     * @param string $payment_method Payment method.
     */
    protected function process_order_payment($order_id, $payment_method)
    {
    }
    /**
     * Process an order that doesn't require payment.
     *
     * @since 3.0.0
     * @param int $order_id Order ID.
     */
    protected function process_order_without_payment($order_id)
    {
    }
    /**
     * Create a new customer account if needed.
     *
     * @throws Exception When not able to create customer.
     * @param array $data Posted data.
     */
    protected function process_customer($data)
    {
    }
    /**
     * If checkout failed during an AJAX call, send failure response.
     */
    protected function send_ajax_failure_response()
    {
    }
    /**
     * Process the checkout after the confirm order button is pressed.
     *
     * @throws Exception When validation fails.
     */
    public function process_checkout()
    {
    }
    /**
     * Get a posted address field after sanitization and validation.
     *
     * @param string $key  Field key.
     * @param string $type Type of address; 'billing' or 'shipping'.
     * @return string
     */
    public function get_posted_address_data($key, $type = 'billing')
    {
    }
    /**
     * Gets the value either from POST, or from the customer object. Sets the default values in checkout fields.
     *
     * @param string $input Name of the input we want to grab data for. e.g. billing_country.
     * @return string The default value.
     */
    public function get_value($input)
    {
    }
}
