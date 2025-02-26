<?php

namespace ;

/**
 * WooCommerce Payment Token.
 *
 * Representation of a general payment token to be extended by individuals types of tokens
 * examples: Credit Card, eCheck.
 *
 * @class       WC_Payment_Token
 * @version     3.0.0
 * @since       2.6.0
 * @package     WooCommerce\Abstracts
 */
abstract class WC_Payment_Token extends \WC_Legacy_Payment_Token
{
    /**
     * Token Data (stored in the payment_tokens table).
     *
     * @var array
     */
    protected $data = array(
  'gateway_id' => '',
  'token' => '',
  'is_default' => false,
  'user_id' => 0,
  'type' => '',
);

    /**
     * Token Type (CC, eCheck, or a custom type added by an extension).
     * Set by child classes.
     *
     * @var string
     */
    protected $type = '';

    /**
     * Initialize a payment token.
     *
     * These fields are accepted by all payment tokens:
     * is_default   - boolean Optional - Indicates this is the default payment token for a user
     * token        - string  Required - The actual token to store
     * gateway_id   - string  Required - Identifier for the gateway this token is associated with
     * user_id      - int     Optional - ID for the user this token is associated with. 0 if this token is not associated with a user
     *
     * @since 2.6.0
     * @param mixed $token Token.
     */
    public function __construct($token = '')
    {
        // stub
    }

    /**
     * Returns the raw payment token.
     *
     * @since  2.6.0
     * @param  string $context Context in which to call this.
     * @return string Raw token
     */
    public function get_token($context = 'view')
    {
        // stub
    }

    /**
     * Returns the type of this payment token (CC, eCheck, or something else).
     * Overwritten by child classes.
     *
     * @since  2.6.0
     * @param  string $deprecated Deprecated since WooCommerce 3.0.
     * @return string Payment Token Type (CC, eCheck)
     */
    public function get_type($deprecated = '')
    {
        // stub
    }

    /**
     * Get type to display to user.
     * Get's overwritten by child classes.
     *
     * @since  2.6.0
     * @param  string $deprecated Deprecated since WooCommerce 3.0.
     * @return string
     */
    public function get_display_name($deprecated = '')
    {
        // stub
    }

    /**
     * Returns the user ID associated with the token or false if this token is not associated.
     *
     * @since 2.6.0
     * @param  string $context In what context to execute this.
     * @return int User ID if this token is associated with a user or 0 if no user is associated
     */
    public function get_user_id($context = 'view')
    {
        // stub
    }

    /**
     * Returns the ID of the gateway associated with this payment token.
     *
     * @since 2.6.0
     * @param  string $context In what context to execute this.
     * @return string Gateway ID
     */
    public function get_gateway_id($context = 'view')
    {
        // stub
    }

    /**
     * Returns the ID of the gateway associated with this payment token.
     *
     * @since 2.6.0
     * @param  string $context In what context to execute this.
     * @return string Gateway ID
     */
    public function get_is_default($context = 'view')
    {
        // stub
    }

    /**
     * Set the raw payment token.
     *
     * @since 2.6.0
     * @param string $token Payment token.
     */
    public function set_token($token)
    {
        // stub
    }

    /**
     * Set the user ID for the user associated with this order.
     *
     * @since 2.6.0
     * @param int $user_id User ID.
     */
    public function set_user_id($user_id)
    {
        // stub
    }

    /**
     * Set the gateway ID.
     *
     * @since 2.6.0
     * @param string $gateway_id Gateway ID.
     */
    public function set_gateway_id($gateway_id)
    {
        // stub
    }

    /**
     * Marks the payment as default or non-default.
     *
     * @since 2.6.0
     * @param boolean $is_default True or false.
     */
    public function set_default($is_default)
    {
        // stub
    }

    /**
     * Returns if the token is marked as default.
     *
     * @since 2.6.0
     * @return boolean True if the token is default
     */
    public function is_default()
    {
        // stub
    }

    /**
     * Validate basic token info (token and type are required).
     *
     * @since 2.6.0
     * @return boolean True if the passed data is valid
     */
    public function validate()
    {
        // stub
    }

}

