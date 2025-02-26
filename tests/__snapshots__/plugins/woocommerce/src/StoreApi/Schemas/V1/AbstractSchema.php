<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * AbstractSchema class.
 *
 * For REST Route Schemas
 */
abstract class AbstractSchema extends \
{
    const EXTENDING_KEY = 'extensions';

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
    protected $extend = null;

    /**
     * Schema Controller instance.
     *
     * @var SchemaController
     */
    protected $controller = null;

    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend Rest Extending instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, Automattic\WooCommerce\StoreApi\SchemaController $controller)
    {
        // stub
    }

    /**
     * Returns the full item schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
        // stub
    }

    /**
     * Returns the full item response.
     *
     * @param mixed $item Item to get response for.
     * @return array|stdClass
     */
    public function get_item_response($item)
    {
        // stub
    }

    /**
     * Return schema properties.
     *
     * @return array
     */
    public abstract function get_properties();

    /**
     * Recursive removal of arg_options.
     *
     * @param array $properties Schema properties.
     */
    protected function remove_arg_options($properties)
    {
        // stub
    }

    /**
     * Returns the public schema.
     *
     * @return array
     */
    public function get_public_item_schema()
    {
        // stub
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
        // stub
    }

    /**
     * Gets an array of schema defaults recursively.
     *
     * @param array $properties Schema property data.
     * @return array Array of defaults, pulled from arg_options
     */
    protected function get_recursive_schema_property_defaults($properties)
    {
        // stub
    }

    /**
     * Gets a function that validates recursively.
     *
     * @param array $properties Schema property data.
     * @return function Anonymous validation callback.
     */
    protected function get_recursive_validate_callback($properties)
    {
        // stub
    }

    /**
     * Gets a function that sanitizes recursively.
     *
     * @param array $properties Schema property data.
     * @return function Anonymous validation callback.
     */
    protected function get_recursive_sanitize_callback($properties)
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Force all schema properties to be readonly.
     *
     * @param array $properties Schema.
     * @return array Updated schema.
     */
    protected function force_schema_readonly($properties)
    {
        // stub
    }

    /**
     * Returns consistent currency schema used across endpoints for prices.
     *
     * @return array
     */
    protected function get_store_currency_properties()
    {
        // stub
    }

    /**
     * Adds currency data to an array of monetary values.
     *
     * @param array $values Monetary amounts.
     * @return array Monetary amounts with currency data appended.
     */
    protected function prepare_currency_response($values)
    {
        // stub
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
        // stub
    }

    /**
     * Prepares HTML based content, such as post titles and content, for the API response.
     *
     * @param string|array $response Data to format.
     * @return string|array Formatted data.
     */
    protected function prepare_html_response($response)
    {
        // stub
    }

}

