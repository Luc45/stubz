<?php

namespace Automattic\WooCommerce\StoreApi\Exceptions;

/**
 * InvalidStockLevelsInCartException class.
 *
 * This exception is thrown if any items are out of stock after each product on a draft order has been stock checked.
 */
class InvalidStockLevelsInCartException extends \Exception
{
    /**
     * Sanitized error code.
     *
     * @var string
     */
    public $error_code;
    /**
     * Additional error data.
     *
     * @var array
     */
    public $additional_data = [];
    /**
     * All errors to display to the user.
     *
     * @var WP_Error
     */
    public $error;
    /**
     * Setup exception.
     *
     * @param string   $error_code      Machine-readable error code, e.g `woocommerce_invalid_product_id`.
     * @param WP_Error $error           The WP_Error object containing all errors relating to stock availability.
     * @param array    $additional_data Extra data (key value pairs) to expose in the error response.
     */
    public function __construct($error_code, $error, $additional_data = [])
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
     * Returns the list of messages.
     *
     * @return WP_Error
     */
    public function getError()
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
}