<?php

namespace Automattic\WooCommerce\StoreApi\Exceptions;

/**
 * RouteException class.
 */
class RouteException extends \Exception implements \Throwable, \Stringable
{
    /**
     * Sanitized error code.
     *
     * @var string
     */
    public $error_code = null;

    /**
     * Additional error data.
     *
     * @var array
     */
    public $additional_data = array(
);

    /**
     * Setup exception.
     *
     * @param string $error_code       Machine-readable error code, e.g `woocommerce_invalid_product_id`.
     * @param string $message          User-friendly translated error message, e.g. 'Product ID is invalid'.
     * @param int    $http_status_code Proper HTTP status code to respond with, e.g. 400.
     * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
     */
    public function __construct($error_code, $message, $http_status_code = 400, $additional_data = array(
))
    {
        // stub
    }

    /**
     * Returns the error code.
     *
     * @return string
     */
    public function getErrorCode()
    {
        // stub
    }

    /**
     * Returns additional error data.
     *
     * @return array
     */
    public function getAdditionalData()
    {
        // stub
    }

}

