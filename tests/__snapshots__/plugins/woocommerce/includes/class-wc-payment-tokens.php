<?php

namespace ;

/**
 * Payment tokens class.
 */
class WC_Payment_Tokens
{
    /**
     * Gets valid tokens from the database based on user defined criteria.
     *
     * @since  2.6.0
     * @param  array $args Query arguments {
     *     Array of query parameters.
     *
     *     @type string $token_id   Token ID.
     *     @type string $user_id    User ID.
     *     @type string $gateway_id Gateway ID.
     *     @type string $type       Token type.
     * }
     * @return WC_Payment_Token[]
     */
    public static function get_tokens($args)
    {
        // stub
    }

    /**
     * Returns an array of payment token objects associated with the passed customer ID.
     *
     * @since 2.6.0
     * @param  int    $customer_id Customer ID.
     * @param  string $gateway_id  Optional Gateway ID for getting tokens for a specific gateway.
     * @return WC_Payment_Token[]  Array of token objects.
     */
    public static function get_customer_tokens($customer_id, $gateway_id = '')
    {
        // stub
    }

    /**
     * Returns a customers default token or NULL if there is no default token.
     *
     * @since  2.6.0
     * @param  int $customer_id Customer ID.
     * @return WC_Payment_Token|null
     */
    public static function get_customer_default_token($customer_id)
    {
        // stub
    }

    /**
     * Returns an array of payment token objects associated with the passed order ID.
     *
     * @since 2.6.0
     * @param int $order_id       Order ID.
     * @return WC_Payment_Token[] Array of token objects.
     */
    public static function get_order_tokens($order_id)
    {
        // stub
    }

    /**
     * Get a token object by ID.
     *
     * @since 2.6.0
     *
     * @param int    $token_id Token ID.
     * @param object $token_result Token result.
     * @return null|WC_Payment_Token Returns a valid payment token or null if no token can be found.
     */
    public static function get($token_id, $token_result = null)
    {
        // stub
    }

    /**
     * Remove a payment token from the database by ID.
     *
     * @since 2.6.0
     * @param int $token_id Token ID.
     */
    public static function delete($token_id)
    {
        // stub
    }

    /**
     * Loops through all of a users payment tokens and sets is_default to false for all but a specific token.
     *
     * @since 2.6.0
     * @param int $user_id  User to set a default for.
     * @param int $token_id The ID of the token that should be default.
     */
    public static function set_users_default($user_id, $token_id)
    {
        // stub
    }

    /**
     * Returns what type (credit card, echeck, etc) of token a token is by ID.
     *
     * @since  2.6.0
     * @param  int $token_id Token ID.
     * @return string        Type.
     */
    public static function get_token_type_by_id($token_id)
    {
        // stub
    }

    /**
     * Get classname based on token type.
     *
     * @since 3.8.0
     * @param string $type Token type.
     * @return string
     */
    protected static function get_token_classname($type)
    {
        // stub
    }

}

