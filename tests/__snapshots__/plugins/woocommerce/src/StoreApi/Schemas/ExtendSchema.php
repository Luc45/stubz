<?php

namespace Automattic\WooCommerce\StoreApi\Schemas;

/**
 * Provides utility functions to extend Store API schemas.
 *
 * Note there are also helpers that map to these methods.
 *
 * @see woocommerce_store_api_register_endpoint_data()
 * @see woocommerce_store_api_register_update_callback()
 * @see woocommerce_store_api_register_payment_requirements()
 * @see woocommerce_store_api_get_formatter()
 */
final class ExtendSchema
{
    /**
     * List of Store API schema that is allowed to be extended by extensions.
     *
     * @var string[]
     */
    private $endpoints;

    /**
     * Holds the formatters class instance.
     *
     * @var Formatters
     */
    private $formatters = null;

    /**
     * Data to be extended
     *
     * @var array
     */
    private $extend_data = array (
);

    /**
     * Data to be extended
     *
     * @var array
     */
    private $callback_methods = array (
);

    /**
     * Array of payment requirements
     *
     * @var array
     */
    private $payment_requirements = array (
);

    /**
     * Constructor
     *
     * @param Formatters $formatters An instance of the formatters class.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\Formatters $formatters)
    {
        // stub
    }

    /**
     * Register endpoint data under a specified namespace
     *
     * @param array $args {
     *     An array of elements that make up a post to update or insert.
     *
     *     @type string   $endpoint Required. The endpoint to extend.
     *     @type string   $namespace Required. Plugin namespace.
     *     @type callable $schema_callback Callback executed to add schema data.
     *     @type callable $data_callback Callback executed to add endpoint data.
     *     @type string   $schema_type The type of data, object or array.
     * }
     *
     * @throws \Exception On failure to register.
     */
    public function register_endpoint_data($args)
    {
        // stub
    }

    /**
     * Add callback functions that can be executed by the cart/extensions endpoint.
     *
     * @param array $args {
     *     An array of elements that make up the callback configuration.
     *
     *     @type string   $namespace Required. Plugin namespace.
     *     @type callable $callback Required. The function/callable to execute.
     * }
     *
     * @throws \Exception On failure to register.
     */
    public function register_update_callback($args)
    {
        // stub
    }

    /**
     * Registers and validates payment requirements callbacks.
     *
     * @param array $args {
     *     Array of registration data.
     *
     *     @type callable $data_callback Required. Callback executed to add payment requirements data.
     * }
     *
     * @throws \Exception On failure to register.
     */
    public function register_payment_requirements($args)
    {
        // stub
    }

    /**
     * Returns a formatter instance.
     *
     * @param string $name Formatter name.
     * @return FormatterInterface
     */
    public function get_formatter($name)
    {
        // stub
    }

    /**
     * Get callback for a specific endpoint and namespace.
     *
     * @param string $namespace The namespace to get callbacks for.
     *
     * @return callable The callback registered by the extension.
     * @throws \Exception When callback is not callable or parameters are incorrect.
     */
    public function get_update_callback($namespace)
    {
        // stub
    }

    /**
     * Returns the registered endpoint data
     *
     * @param string $endpoint    A valid identifier.
     * @param array  $passed_args Passed arguments from the Schema class.
     * @return object Returns an casted object with registered endpoint data.
     * @throws \Exception If a registered callback throws an error, or silently logs it.
     */
    public function get_endpoint_data($endpoint, array $passed_args = array (
))
    {
        // stub
    }

    /**
     * Returns the registered endpoint schema
     *
     * @param string $endpoint    A valid identifier.
     * @param array  $passed_args Passed arguments from the Schema class.
     * @return object Returns an array with registered schema data.
     * @throws \Exception If a registered callback throws an error, or silently logs it.
     */
    public function get_endpoint_schema($endpoint, array $passed_args = array (
))
    {
        // stub
    }

    /**
     * Returns the additional payment requirements for the cart which are required to make payments. Values listed here
     * are compared against each Payment Gateways "supports" flag.
     *
     * @param array $requirements list of requirements that should be added to the collected requirements.
     * @return array Returns a list of payment requirements.
     * @throws \Exception If a registered callback throws an error, or silently logs it.
     */
    public function get_payment_requirements(array $requirements = array (
  0 => 'products',
))
    {
        // stub
    }

    /**
     * Throws error and/or silently logs it.
     *
     * @param string|\Throwable $exception_or_error Error message or \Exception.
     * @throws \Exception An error to throw if we have debug enabled and user is admin.
     */
    private function throw_exception($exception_or_error)
    {
        // stub
    }

    /**
     * Format schema for an extension.
     *
     * @param string $namespace Error message or \Exception.
     * @param array  $schema An error to throw if we have debug enabled and user is admin.
     * @param string $schema_type How should data be shaped.
     * @return array Formatted schema.
     */
    private function format_extensions_properties($namespace, $schema, $schema_type)
    {
        // stub
    }

}

