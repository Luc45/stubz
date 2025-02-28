<?php
/**
 * Auth class.
 */
class WC_Auth
{
    /**
     * Version.
     *
     * @var int
     */
    public const VERSION = 1;
    /**
     * Setup class.
     *
     * @since 2.4.0
     */
    public function __construct()
{
}
    /**
     * Add query vars.
     *
     * @since  2.4.0
     * @param  array $vars Query variables.
     * @return string[]
     */
    public function add_query_vars($vars)
{
}
    /**
     * Add auth endpoint.
     *
     * @since 2.4.0
     */
    public static function add_endpoint()
{
}
    /**
     * Get scope name.
     *
     * @since 2.4.0
     * @param  string $scope Permission scope.
     * @return string
     */
    protected function get_i18n_scope($scope)
{
}
    /**
     * Return a list of permissions a scope allows.
     *
     * @since  2.4.0
     * @param  string $scope Permission scope.
     * @return array
     */
    protected function get_permissions_in_scope($scope)
{
}
    /**
     * Build auth urls.
     *
     * @since  2.4.0
     * @param  array  $data     Data to build URL.
     * @param  string $endpoint Endpoint.
     * @return string
     */
    protected function build_url($data, $endpoint)
{
}
    /**
     * Decode and format a URL.
     *
     * @param  string $url URL.
     * @return string
     */
    protected function get_formatted_url($url)
{
}
    /**
     * Make validation.
     *
     * @since  2.4.0
     * @throws Exception When validate fails.
     */
    protected function make_validation()
{
}
    /**
     * Create keys.
     *
     * @since  2.4.0
     *
     * @param  string $app_name    App name.
     * @param  string $app_user_id User ID.
     * @param  string $scope       Scope.
     *
     * @return array
     */
    protected function create_keys($app_name, $app_user_id, $scope)
{
}
    /**
     * Post consumer data.
     *
     * @since  2.4.0
     *
     * @throws Exception When validation fails.
     * @param  array  $consumer_data Consumer data.
     * @param  string $url           URL.
     * @return bool
     */
    protected function post_consumer_data($consumer_data, $url)
{
}
    /**
     * Handle auth requests.
     *
     * @since 2.4.0
     * @throws Exception When auth_endpoint validation fails.
     */
    public function handle_auth_requests()
{
}
    /**
     * Auth endpoint.
     *
     * @since 2.4.0
     * @throws Exception When validation fails.
     * @param string $route Route.
     */
    protected function auth_endpoint($route)
{
}
}
