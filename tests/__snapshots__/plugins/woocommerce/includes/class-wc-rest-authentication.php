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
        // stub
    }

    /**
     * Initialize authentication actions.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Check if is request to our REST API.
     *
     * @return bool
     */
    protected function is_request_to_rest_api()
    {
        // stub
    }

    /**
     * Authenticate user.
     *
     * @param int|false $user_id User ID if one has been determined, false otherwise.
     * @return int|false
     */
    public function authenticate($user_id)
    {
        // stub
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
        // stub
    }

    /**
     * Check for authentication error.
     *
     * @param WP_Error|null|bool $error Error data.
     * @return WP_Error|null|bool
     */
    public function check_authentication_error($error)
    {
        // stub
    }

    /**
     * Set authentication error.
     *
     * @param WP_Error $error Authentication error data.
     */
    protected function set_error($error)
    {
        // stub
    }

    /**
     * Get authentication error.
     *
     * @return WP_Error|null.
     */
    protected function get_error()
    {
        // stub
    }

    /**
     * Basic Authentication.
     *
     * SSL-encrypted requests are not subject to sniffing or man-in-the-middle
     * attacks, so the request can be authenticated by simply looking up the user
     * associated with the given consumer key and confirming the consumer secret
     * provided is valid.
     *
     * @return int|bool
     */
    private function perform_basic_authentication()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Perform OAuth 1.0a "one-legged" (http://oauthbible.com/#oauth-10a-one-legged) authentication for non-SSL requests.
     *
     * This is required so API credentials cannot be sniffed or intercepted when making API requests over plain HTTP.
     *
     * This follows the spec for simple OAuth 1.0a authentication (RFC 5849) as closely as possible, with two exceptions:
     *
     * 1) There is no token associated with request/responses, only consumer keys/secrets are used.
     *
     * 2) The OAuth parameters are included as part of the request query string instead of part of the Authorization header,
     *    This is because there is no cross-OS function within PHP to get the raw Authorization header.
     *
     * @link http://tools.ietf.org/html/rfc5849 for the full spec.
     *
     * @return int|bool
     */
    private function perform_oauth_authentication()
    {
        // stub
    }

    /**
     * Verify that the consumer-provided request signature matches our generated signature,
     * this ensures the consumer has a valid key/secret.
     *
     * @param stdClass $user   User data.
     * @param array    $params The request parameters.
     * @return true|WP_Error
     */
    private function check_oauth_signature($user, $params)
    {
        // stub
    }

    /**
     * Creates an array of urlencoded strings out of each array key/value pairs.
     *
     * @param  array  $params       Array of parameters to convert.
     * @param  array  $query_params Array to extend.
     * @param  string $key          Optional Array key to append.
     * @return string               Array of urlencoded strings.
     */
    private function join_with_equals_sign($params, $query_params = array (
), $key = '')
    {
        // stub
    }

    /**
     * Normalize each parameter by assuming each parameter may have already been
     * encoded, so attempt to decode, and then re-encode according to RFC 3986.
     *
     * Note both the key and value is normalized so a filter param like:
     *
     * 'filter[period]' => 'week'
     *
     * is encoded to:
     *
     * 'filter%255Bperiod%255D' => 'week'
     *
     * This conforms to the OAuth 1.0a spec which indicates the entire query string
     * should be URL encoded.
     *
     * @see rawurlencode()
     * @param array $parameters Un-normalized parameters.
     * @return array Normalized parameters.
     */
    private function normalize_parameters($parameters)
    {
        // stub
    }

    /**
     * Verify that the timestamp and nonce provided with the request are valid. This prevents replay attacks where
     * an attacker could attempt to re-send an intercepted request at a later time.
     *
     * - A timestamp is valid if it is within 15 minutes of now.
     * - A nonce is valid if it has not been used within the last 15 minutes.
     *
     * @param stdClass $user      User data.
     * @param int      $timestamp The unix timestamp for when the request was made.
     * @param string   $nonce     A unique (for the given user) 32 alphanumeric string, consumer-generated.
     * @return bool|WP_Error
     */
    private function check_oauth_timestamp_and_nonce($user, $timestamp, $nonce)
    {
        // stub
    }

    /**
     * Return the user data for the given consumer_key.
     *
     * @param string $consumer_key Consumer key.
     * @return array
     */
    private function get_user_data_by_consumer_key($consumer_key)
    {
        // stub
    }

    /**
     * Check that the API keys provided have the proper key-specific permissions to either read or write API resources.
     *
     * @param string $method Request method.
     * @return bool|WP_Error
     */
    private function check_permissions($method)
    {
        // stub
    }

    /**
     * Updates the `last_access` field for the API key associated with the current request.
     *
     * This method tries to disambiguate 'primary' API requests from any programmatic REST
     * API requests made internally.
     *
     * @param WP_REST_Request $request The request currently being processed.
     *
     * @return void
     */
    private function update_last_access($request)
    {
        // stub
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
        // stub
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
        // stub
    }

}
