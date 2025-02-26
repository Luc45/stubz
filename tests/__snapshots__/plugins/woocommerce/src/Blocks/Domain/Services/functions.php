<?php

/**
 * Register a checkout field.
 *
 * @param array $options Field arguments. See CheckoutFields::register_checkout_field() for details.
 * @throws \Exception If field registration fails.
 */
function woocommerce_register_additional_checkout_field($options)
{
    // stub
}

/**
 * Register a checkout field.
 *
 * @param array $options Field arguments. See CheckoutFields::register_checkout_field() for details.
 * @throws \Exception If field registration fails.
 * @deprecated 5.6.0 Use woocommerce_register_additional_checkout_field() instead.
 */
function __experimental_woocommerce_blocks_register_checkout_field($options)
{
    // stub
}

/**
 * Deregister a checkout field.
 *
 * @param string $field_id Field ID.
 * @throws \Exception If field deregistration fails.
 * @internal
 */
function __internal_woocommerce_blocks_deregister_checkout_field($field_id)
{
    // stub
}

