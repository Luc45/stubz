<?php

namespace Automattic\WooCommerce\StoreApi;

/**
 * Authentication class.
 */
class Authentication
{
    /**
     * Hook into WP lifecycle events. This is hooked by the StoreAPI class on `rest_api_init`.
     */
    public function init()
    {
        // stub
    }

    /**
     * Add allowed cors headers for store API headers.
     *
     * @param array $allowed_headers Allowed headers.
     * @return array
     */
    public function allowed_cors_headers($allowed_headers)
    {
        // stub
    }

    /**
     * Add CORS headers to a response object.
     *
     * These checks prevent access to the Store API from non-allowed origins. By default, the WordPress REST API allows
     * access from any origin. Because some Store API routes return PII, we need to add our own CORS headers.
     *
     * Allowed origins can be changed using the WordPress `allowed_http_origins` or `allowed_http_origin` filters if
     * access needs to be granted to other domains.
     *
     * Users of valid Cart Tokens are also allowed access from any origin.
     *
     * @param bool              $value  Whether the request has already been served.
     * @param \WP_HTTP_Response $result  Result to send to the client. Usually a `WP_REST_Response`.
     * @param \WP_REST_Request  $request Request used to generate the response.
     * @return bool
     */
    public function send_cors_headers($value, $result, $request)
    {
        // stub
    }

    /**
     * Is the request a preflight request? Checks the request method
     *
     * @return boolean
     */
    protected function is_preflight()
    {
        // stub
    }

    /**
     * Checks if we're using a cart token to access the Store API.
     *
     * @param \WP_REST_Request $request Request object.
     * @return boolean
     */
    protected function has_valid_cart_token(WP_REST_Request $request)
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
     * The Store API does not require authentication.
     *
     * @param \WP_Error|mixed $result Error from another authentication handler, null if we should handle it, or another value if not.
     * @return \WP_Error|null|bool
     */
    public function check_authentication($result)
    {
        // stub
    }

    /**
     * When the login cookies are set, they are not available until the next page reload. For the Store API, specifically
     * for returning updated nonces, we need this to be available immediately.
     *
     * @param string $logged_in_cookie The value for the logged in cookie.
     */
    public function set_logged_in_cookie($logged_in_cookie)
    {
        // stub
    }

    /**
     * Opt in to rate limiting for the checkout endpoint.
     *
     * @param \WP_Error|mixed $result Error from another authentication handler, null if we should handle it, or another value if not.
     * @return \WP_Error|null|bool
     */
    public function opt_in_checkout_endpoint($result)
    {
        // stub
    }

    /**
     * Applies Rate Limiting to the request, and passes through any errors from other authentication methods used before this one.
     *
     * @param \WP_Error|mixed $result Error from another authentication handler, null if we should handle it, or another value if not.
     * @return \WP_Error|null|bool
     */
    protected function apply_rate_limiting($result)
    {
        // stub
    }

    /**
     * Check if is request to the Store API.
     *
     * @return bool
     */
    protected function is_request_to_store_api()
    {
        // stub
    }

    /**
     * Get current user IP Address.
     *
     * X_REAL_IP and CLIENT_IP are custom implementations designed to facilitate obtaining a user's ip through proxies, load balancers etc.
     *
     * _FORWARDED_FOR (XFF) request header is a de-facto standard header for identifying the originating IP address of a client connecting to a web server through a proxy server.
     * Note for X_FORWARDED_FOR, Proxy servers can send through this header like this: X-Forwarded-For: client1, proxy1, proxy2.
     * Make sure we always only send through the first IP in the list which should always be the client IP.
     * Documentation at https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Forwarded-For
     *
     * Forwarded request header contains information that may be added by reverse proxy servers (load balancers, CDNs, and so on).
     * Documentation at https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Forwarded
     * Full RFC at https://datatracker.ietf.org/doc/html/rfc7239
     *
     * @param boolean $proxy_support Enables/disables proxy support.
     *
     * @return string
     */
    protected static function get_ip_address(bool $proxy_support = false)
    {
        // stub
    }

    /**
     * Uses filter_var() to validate and return ipv4 and ipv6 addresses
     * Will return 0.0.0.0 if the ip is not valid. This is done to group and still rate limit invalid ips.
     *
     * @param string $ip ipv4 or ipv6 ip string.
     *
     * @return string
     */
    protected static function validate_ip($ip)
    {
        // stub
    }

}