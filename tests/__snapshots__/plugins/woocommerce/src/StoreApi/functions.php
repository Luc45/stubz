<?php

/**
 * Register endpoint data under a specified namespace.
 *
 * @see Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema::register_endpoint_data()
 *
 * @param array $args Args to pass to register_endpoint_data.
 * @returns boolean|\WP_Error True on success, WP_Error on fail.
 */
function woocommerce_store_api_register_endpoint_data($args)
{
    // stub
}

/**
 * Add callback functions that can be executed by the cart/extensions endpoint.
 *
 * @see Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema::register_update_callback()
 *
 * @param array $args Args to pass to register_update_callback.
 * @returns boolean|\WP_Error True on success, WP_Error on fail.
 */
function woocommerce_store_api_register_update_callback($args)
{
    // stub
}

/**
 * Registers and validates payment requirements callbacks.
 *
 * @see Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema::register_payment_requirements()
 *
 * @param array $args Args to pass to register_payment_requirements.
 * @returns boolean|\WP_Error True on success, WP_Error on fail.
 */
function woocommerce_store_api_register_payment_requirements($args)
{
    // stub
}

/**
 * Returns a formatter instance.
 *
 * @see Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema::get_formatter()
 *
 * @param string $name Formatter name.
 * @return Automattic\WooCommerce\StoreApi\Formatters\FormatterInterface
 */
function woocommerce_store_api_get_formatter($name)
{
    // stub
}
