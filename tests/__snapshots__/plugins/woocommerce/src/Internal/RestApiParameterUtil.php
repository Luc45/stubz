<?php

namespace Automattic\WooCommerce\Internal;

/**
 * Helper methods for the REST API.
 *
 * Class ApiUtil
 *
 * @package Automattic\WooCommerce\Internal
 */
class RestApiParameterUtil
{
    /**
     * Converts a create refund request from the public API format:
     *
     * [
     *   "reason" => "",
     *   "api_refund" => "x",
     *   "api_restock" => "x",
     *   "line_items" => [
     *     "id" => "111",
     *     "quantity" => 222,
     *     "refund_total" => 333,
     *     "refund_tax" => [
     *       [
     *          "id": "444",
     *          "refund_total": 555
     *       ],...
     *   ],...
     * ]
     *
     * ...to the internally used format:
     *
     * [
     *   "reason" => null,      (if it's missing or any empty value, set as null)
     *   "api_refund" => true,  (if it's missing or non-bool, set as "true")
     *   "api_restock" => true, (if it's missing or non-bool, set as "true")
     *   "line_items" => [      (convert sequential array to associative based on "id")
     *     "111" => [
     *       "qty" => 222,      (rename "quantity" to "qty")
     *       "refund_total" => 333,
     *       "refund_tax" => [  (convert sequential array to associative based on "id" and "refund_total)
     *         "444" => 555,...
     *       ],...
     *   ]
     * ]
     *
     * It also calculates the amount if missing and whenever possible, see maybe_calculate_refund_amount_from_line_items.
     *
     * The conversion is done in a way that if the request is already in the internal format,
     * then nothing is changed for compatibility. For example, if the line items array
     * is already an associative array or any of its elements
     * is missing the "id" key, then the entire array is left unchanged.
     * Same for the "refund_tax" array inside each line item.
     *
     * @param \WP_REST_Request $request The request to adjust.
     */
    public static function adjust_create_refund_request_parameters(WP_REST_Request &$request)
{
}
}