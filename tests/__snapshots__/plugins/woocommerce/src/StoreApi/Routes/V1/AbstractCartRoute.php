<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * Abstract Cart Route
 */
abstract class AbstractCartRoute
{
    const SCHEMA_TYPE = 'cart';

    /**
     * Schema class instance.
     *
     * @var CartSchema
     */
    protected $schema = null;

    /**
     * Schema class for the cart.
     *
     * @var CartSchema
     */
    protected $cart_schema = null;

    /**
     * Schema class for the cart item.
     *
     * @var CartItemSchema
     */
    protected $cart_item_schema = null;

    /**
     * Cart controller class instance.
     *
     * @var CartController
     */
    protected $cart_controller = null;

    /**
     * Order controller class instance.
     *
     * @var OrderController
     */
    protected $order_controller = null;

    /**
     * Additional fields controller class instance.
     *
     * @var CheckoutFields
     */
    protected $additional_fields_controller = null;

    /**
     * True when this route has been requested with a valid cart token.
     *
     * @var bool|null
     */
    protected $has_cart_token = null;

    /**
     * Constructor.
     *
     * @param SchemaController $schema_controller Schema Controller instance.
     * @param AbstractSchema   $schema Schema class for this route.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\SchemaController $schema_controller, Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema $schema)
    {
        // stub
    }

    /**
     * Are we updating data or getting data?
     *
     * @param \WP_REST_Request $request Request object.
     * @return boolean
     */
    protected function is_update_request(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Get the route response based on the type of request.
     *
     * @param \WP_REST_Request $request Request object.
     *
     * @return \WP_REST_Response
     */
    public function get_response(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Add nonce headers to a response object.
     *
     * @param \WP_REST_Response $response The response object.
     *
     * @return \WP_REST_Response
     */
    protected function add_response_headers(WP_REST_Response $response)
    {
        // stub
    }

    /**
     * Load the cart session before handling responses.
     *
     * @param \WP_REST_Request $request Request object.
     */
    protected function load_cart_session(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Generates a cart token for the response headers.
     *
     * Current namespace is used as the token Issuer.
     * *
     *
     * @return string
     */
    protected function get_cart_token()
    {
        // stub
    }

    /**
     * Gets the secret for the cart token using wp_salt.
     *
     * @return string
     */
    protected function get_cart_token_secret()
    {
        // stub
    }

    /**
     * Gets the expiration of the cart token. Defaults to 48h.
     *
     * @return int
     */
    protected function get_cart_token_expiration()
    {
        // stub
    }

    /**
     * Checks if the request has a valid cart token.
     *
     * @param \WP_REST_Request $request Request object.
     * @return bool
     */
    protected function has_cart_token(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Checks if a nonce is required for the route.
     *
     * @param \WP_REST_Request $request Request.
     *
     * @return bool
     */
    protected function requires_nonce(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Triggered after an update to cart data. Re-calculates totals and updates draft orders (if they already exist) to
     * keep all data in sync.
     *
     * @param \WP_REST_Request $request Request object.
     */
    protected function cart_updated(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * For non-GET endpoints, require and validate a nonce to prevent CSRF attacks.
     *
     * Nonces will mismatch if the logged in session cookie is different! If using a client to test, set this cookie
     * to match the logged in cookie in your browser.
     *
     * @param \WP_REST_Request $request Request object.
     *
     * @return \WP_Error|boolean
     */
    protected function check_nonce(WP_REST_Request $request)
    {
        // stub
    }

    /**
     * Get route response when something went wrong.
     *
     * @param string $error_code String based error code.
     * @param string $error_message User facing error message.
     * @param int    $http_status_code HTTP status. Defaults to 500.
     * @param array  $additional_data Extra data (key value pairs) to expose in the error response.
     *
     * @return \WP_Error WP Error object.
     */
    protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = array (
))
    {
        // stub
    }

}

