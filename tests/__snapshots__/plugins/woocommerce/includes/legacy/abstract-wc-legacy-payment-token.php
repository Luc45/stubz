<?php
/**
 * Legacy Payment Tokens.
 * Payment Tokens were introduced in 2.6.0 with create and update as methods.
 * Major CRUD changes occurred in 3.0, so these were deprecated (save and delete still work).
 * This legacy class is for backwards compatibility in case any code called ->read, ->update or ->create
 * directly on the object.
 *
 * @version  3.0.0
 * @package  WooCommerce\Classes
 * @category Class
 * @author   WooCommerce
 */
abstract class WC_Legacy_Payment_Token extends \WC_Data
{
    /**
     * Sets the type of this payment token (CC, eCheck, or something else).
     *
     * @param string Payment Token Type (CC, eCheck)
     */
    public function set_type($type)
{
}
    /**
     * Read a token by ID.
     * @deprecated 3.0.0 - Init a token class with an ID.
     *
     * @param int $token_id
     */
    public function read($token_id)
{
}
    /**
     * Update a token.
     * @deprecated 3.0.0 - Use ::save instead.
     */
    public function update()
{
}
    /**
     * Create a token.
     * @deprecated 3.0.0 - Use ::save instead.
     */
    public function create()
{
}
}
