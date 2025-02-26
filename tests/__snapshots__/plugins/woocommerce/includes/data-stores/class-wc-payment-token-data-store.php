<?php

namespace ;

/**
 * WC Payment Token Data Store: Custom Table.
 *
 * @version  3.0.0
 */
class WC_Payment_Token_Data_Store
{
    /**
     * Meta type. Payment tokens are a new object type.
     *
     * @var string
     */
    protected $meta_type = 'payment_token';

    /**
     * If we have already saved our extra data, don't do automatic / default handling.
     *
     * @var bool
     */
    protected $extra_data_saved = false;

    /**
     * Create a new payment token in the database.
     *
     * @since 3.0.0
     *
     * @param WC_Payment_Token $token Payment token object.
     *
     * @throws Exception Throw exception if invalid or missing payment token fields.
     */
    public function create(&$token)
    {
        // stub
    }

    /**
     * Update a payment token.
     *
     * @since 3.0.0
     *
     * @param WC_Payment_Token $token Payment token object.
     *
     * @throws Exception Throw exception if invalid or missing payment token fields.
     */
    public function update(&$token)
    {
        // stub
    }

    /**
     * Remove a payment token from the database.
     *
     * @since 3.0.0
     * @param WC_Payment_Token $token Payment token object.
     * @param bool             $force_delete Unused param.
     */
    public function delete(&$token, $force_delete = false)
    {
        // stub
    }

    /**
     * Read a token from the database.
     *
     * @since 3.0.0
     *
     * @param WC_Payment_Token $token Payment token object.
     *
     * @throws Exception Throw exception if invalid payment token.
     */
    public function read(&$token)
    {
        // stub
    }

    /**
     * Read extra data associated with the token (like last4 digits of a card for expiry dates).
     *
     * @param WC_Payment_Token $token Payment token object.
     * @since 3.0.0
     */
    protected function read_extra_data(&$token)
    {
        // stub
    }

    /**
     * Saves extra token data as meta.
     *
     * @since 3.0.0
     * @param WC_Payment_Token $token Payment token object.
     * @param bool             $force By default, only changed props are updated. When this param is true all props are updated.
     * @return array List of updated props.
     */
    protected function save_extra_data(&$token, $force = false)
    {
        // stub
    }

    /**
     * Returns an array of objects (stdObject) matching specific token criteria.
     * Accepts token_id, user_id, gateway_id, and type.
     * Each object should contain the fields token_id, gateway_id, token, user_id, type, is_default.
     *
     * @since 3.0.0
     * @param array $args List of accepted args: token_id, gateway_id, user_id, type.
     * @return array
     */
    public function get_tokens($args)
    {
        // stub
    }

    /**
     * Returns an stdObject of a token for a user's default token.
     * Should contain the fields token_id, gateway_id, token, user_id, type, is_default.
     *
     * @since 3.0.0
     * @param int $user_id User ID.
     * @return object
     */
    public function get_users_default_token($user_id)
    {
        // stub
    }

    /**
     * Returns an stdObject of a token.
     * Should contain the fields token_id, gateway_id, token, user_id, type, is_default.
     *
     * @since 3.0.0
     * @param int $token_id Token ID.
     * @return object
     */
    public function get_token_by_id($token_id)
    {
        // stub
    }

    /**
     * Returns metadata for a specific payment token.
     *
     * @since 3.0.0
     * @param int $token_id Token ID.
     * @return array
     */
    public function get_metadata($token_id)
    {
        // stub
    }

    /**
     * Get a token's type by ID.
     *
     * @since 3.0.0
     * @param int $token_id Token ID.
     * @return string
     */
    public function get_token_type_by_id($token_id)
    {
        // stub
    }

    /**
     * Update's a tokens default status in the database. Used for quickly
     * looping through tokens and setting their statuses instead of creating a bunch
     * of objects.
     *
     * @since 3.0.0
     *
     * @param int  $token_id Token ID.
     * @param bool $status Whether given payment token is the default payment token or not.
     *
     * @return void
     */
    public function set_default_status($token_id, $status = true)
    {
        // stub
    }

}

