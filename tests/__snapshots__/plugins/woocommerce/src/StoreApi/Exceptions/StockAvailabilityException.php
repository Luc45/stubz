<?php

namespace Automattic\WooCommerce\StoreApi\Exceptions;

/**
 * StockAvailabilityException class.
 *
 * This exception is thrown when more than one of a product that can only be purchased individually is in a cart.
 */
class StockAvailabilityException extends \Exception
{
    /**
     * Sanitized error code.
     *
     * @var string
     */
    public $error_code;
    /**
     * The name of the product that can only be purchased individually.
     *
     * @var string
     */
    public $product_name;
    /**
     * Additional error data.
     *
     * @var array
     */
    public $additional_data = array();
    /**
     * Setup exception.
     *
     * @param string $error_code       Machine-readable error code, e.g `woocommerce_invalid_product_id`.
     * @param string $product_name     The name of the product that can only be purchased individually.
     * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
     */
    public function __construct($error_code, $product_name, $additional_data = array())
{
}
    /**
     * Returns the error code.
     *
     * @return string
     */
    public function getErrorCode()
{
}
    /**
     * Returns additional error data.
     *
     * @return array
     */
    public function getAdditionalData()
{
}
    /**
     * Returns the product name.
     *
     * @return string
     */
    public function getProductName()
{
}
}