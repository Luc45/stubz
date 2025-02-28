<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * AbstractSchema class.
 *
 * For REST Route Schemas
 */
abstract class AbstractSchema
{
    /**
     * Extending key that gets added to endpoint.
     *
     * @var string
     */
    public const EXTENDING_KEY = 'extensions';
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'Schema';
    /**
     * Rest extend instance.
     *
     * @var ExtendSchema
     */
    protected $extend;
    /**
     * Schema Controller instance.
     *
     * @var SchemaController
     */
    protected $controller;
    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend Rest Extending instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, Automattic\WooCommerce\StoreApi\SchemaController $controller)
{
}
    /**
     * Returns the full item schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
    /**
     * Returns the full item response.
     *
     * @param mixed $item Item to get response for.
     * @return array|stdClass
     */
    public function get_item_response($item)
{
}
    /**
     * Return schema properties.
     *
     * @return array
     */
    abstract public function get_properties();
    /**
     * Recursive removal of arg_options.
     *
     * @param array $properties Schema properties.
     */
    protected function remove_arg_options($properties)
{
}
    /**
     * Returns the public schema.
     *
     * @return array
     */
    public function get_public_item_schema()
{
}
    /**
     * Returns extended data for a specific endpoint.
     *
     * @param string $endpoint The endpoint identifier.
     * @param array  ...$passed_args An array of arguments to be passed to callbacks.
     * @return object the data that will get added.
     */
    protected function get_extended_data($endpoint, ...$passed_args)
{
}
    /**
     * Gets an array of schema defaults recursively.
     *
     * @param array $properties Schema property data.
     * @return array Array of defaults, pulled from arg_options
     */
    protected function get_recursive_schema_property_defaults($properties)
{
}
    /**
     * Gets a function that validates recursively.
     *
     * @param array $properties Schema property data.
     * @return function Anonymous validation callback.
     */
    protected function get_recursive_validate_callback($properties)
{
}
    /**
     * Gets a function that sanitizes recursively.
     *
     * @param array $properties Schema property data.
     * @return function Anonymous validation callback.
     */
    protected function get_recursive_sanitize_callback($properties)
{
}
    /**
     * Returns extended schema for a specific endpoint.
     *
     * @param string $endpoint The endpoint identifer.
     * @param array  ...$passed_args An array of arguments to be passed to callbacks.
     * @return array the data that will get added.
     */
    protected function get_extended_schema($endpoint, ...$passed_args)
{
}
    /**
     * Apply a schema get_item_response callback to an array of items and return the result.
     *
     * @param AbstractSchema $schema Schema class instance.
     * @param array          $items Array of items.
     * @return array Array of values from the callback function.
     */
    protected function get_item_responses_from_schema(Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema $schema, $items)
{
}
    /**
     * Retrieves an array of endpoint arguments from the item schema for the controller.
     *
     * @uses rest_get_endpoint_args_for_schema()
     * @param string $method Optional. HTTP method of the request.
     * @return array Endpoint arguments.
     */
    public function get_endpoint_args_for_item_schema($method)
{
}
    /**
     * Force all schema properties to be readonly.
     *
     * @param array $properties Schema.
     * @return array Updated schema.
     */
    protected function force_schema_readonly($properties)
{
}
    /**
     * Returns consistent currency schema used across endpoints for prices.
     *
     * @return array
     */
    protected function get_store_currency_properties()
{
}
    /**
     * Adds currency data to an array of monetary values.
     *
     * @param array $values Monetary amounts.
     * @return array Monetary amounts with currency data appended.
     */
    protected function prepare_currency_response($values)
{
}
    /**
     * Convert monetary values from WooCommerce to string based integers, using
     * the smallest unit of a currency.
     *
     * @param string|float $amount Monetary amount with decimals.
     * @param int          $decimals Number of decimals the amount is formatted with.
     * @param int          $rounding_mode Defaults to the PHP_ROUND_HALF_UP constant.
     * @return string      The new amount.
     */
    protected function prepare_money_response($amount, $decimals = 2, $rounding_mode = 1)
{
}
    /**
     * Prepares HTML based content, such as post titles and content, for the API response.
     *
     * @param string|array $response Data to format.
     * @return string|array Formatted data.
     */
    protected function prepare_html_response($response)
{
}
}