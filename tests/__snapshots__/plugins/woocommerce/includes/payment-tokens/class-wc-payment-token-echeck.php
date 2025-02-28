<?php
/**
 * WooCommerce eCheck Payment Token.
 *
 * Representation of a payment token for eChecks.
 *
 * @class       WC_Payment_Token_ECheck
 * @version     3.0.0
 * @since       2.6.0
 * @package     WooCommerce\PaymentTokens
 */
class WC_Payment_Token_ECheck extends \WC_Payment_Token
{
    /**
     * Token Type String.
     *
     * @var string
     */
    protected $type = 'eCheck';
    /**
     * Stores eCheck payment token data.
     *
     * @var array
     */
    protected $extra_data = array(
'last4' => ''
);
    /**
     * Get type to display to user.
     *
     * @since  2.6.0
     * @param  string $deprecated Deprecated since WooCommerce 3.0.
     * @return string
     */
    public function get_display_name($deprecated = '')
{
}
    /**
     * Hook prefix
     *
     * @since 3.0.0
     */
    protected function get_hook_prefix()
{
}
    /**
     * Validate eCheck payment tokens.
     *
     * These fields are required by all eCheck payment tokens:
     * last4  - string Last 4 digits of the check
     *
     * @since 2.6.0
     * @return boolean True if the passed data is valid
     */
    public function validate()
{
}
    /**
     * Returns the last four digits.
     *
     * @since  2.6.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string Last 4 digits
     */
    public function get_last4($context = 'view')
{
}
    /**
     * Set the last four digits.
     *
     * @since 2.6.0
     * @param string $last4 eCheck last four digits.
     */
    public function set_last4($last4)
{
}
}
