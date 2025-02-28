<?php
/**
 * REST API authentication class.
 */
class WC_REST_Authentication
{
    /**
     * Authentication error.
     *
     * @var WP_Error
     */
    protected $error = null;
    /**
     * Logged in user data.
     *
     * @var stdClass
     */
    protected $user = null;
    /**
     * Current auth method.
     *
     * @var string
     */
    protected $auth_method = '';
    /**
     * Provides access to the global WC_REST_Authentication instance.
     *
     * @internal
     * @return self
     */
    public static function instance(): self
{
}
    /**
     * Initialize authentication actions.
     */
    public function __construct()
{
}
    /**
     * Check if is request to our REST API.
     *
     * @return bool
     */
    protected function is_request_to_rest_api()
{
}
    /**
     * Authenticate user.
     *
     * @param int|false $user_id User ID if one has been determined, false otherwise.
     * @return int|false
     */
    public function authenticate($user_id)
{
}
    /**
     * Authenticate the user if authentication wasn't performed during the
     * determine_current_user action.
     *
     * Necessary in cases where wp_get_current_user() is called before WooCommerce is loaded.
     *
     * @see https://github.com/woocommerce/woocommerce/issues/26847
     *
     * @param WP_Error|null|bool $error Error data.
     * @return WP_Error|null|bool
     */
    public function authentication_fallback($error)
{
}
    /**
     * Check for authentication error.
     *
     * @param WP_Error|null|bool $error Error data.
     * @return WP_Error|null|bool
     */
    public function check_authentication_error($error)
{
}
    /**
     * Set authentication error.
     *
     * @param WP_Error $error Authentication error data.
     */
    protected function set_error($error)
{
}
    /**
     * Get authentication error.
     *
     * @return WP_Error|null.
     */
    protected function get_error()
{
}
    /**
     * Parse the Authorization header into parameters.
     *
     * @since 3.0.0
     *
     * @param string $header Authorization header value (not including "Authorization: " prefix).
     *
     * @return array Map of parameter values.
     */
    public function parse_header($header)
{
}
    /**
     * Get the authorization header.
     *
     * On certain systems and configurations, the Authorization header will be
     * stripped out by the server or PHP. Typically this is then used to
     * generate `PHP_AUTH_USER`/`PHP_AUTH_PASS` but not passed on. We use
     * `getallheaders` here to try and grab it out instead.
     *
     * @since 3.0.0
     *
     * @return string Authorization header if set.
     */
    public function get_authorization_header()
{
}
    /**
     * Get oAuth parameters from $_GET, $_POST or request header.
     *
     * @since 3.0.0
     *
     * @return array|WP_Error
     */
    public function get_oauth_parameters()
{
}
    /**
     * If the consumer_key and consumer_secret $_GET parameters are NOT provided
     * and the Basic auth headers are either not present or the consumer secret does not match the consumer
     * key provided, then return the correct Basic headers and an error message.
     *
     * @param WP_REST_Response $response Current response being served.
     * @return WP_REST_Response
     */
    public function send_unauthorized_headers($response)
{
}
    /**
     * Check for user permissions and register last access.
     *
     * @param mixed           $result  Response to replace the requested version with.
     * @param WP_REST_Server  $server  Server instance.
     * @param WP_REST_Request $request Request used to generate the response.
     * @return mixed
     */
    public function check_user_permissions($result, $server, $request)
{
}
}
