<?php

namespace ;

/**
 * Auth class.
 */
class WC_Auth
{
    const VERSION = 1;

    /**
     * Setup class.
     *
     * @since 2.4.0
     */
    public function __construct()
    {
        // stub
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
        // stub
    }

    /**
     * Add auth endpoint.
     *
     * @since 2.4.0
     */
    public static function add_endpoint()
    {
        // stub
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
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Decode and format a URL.
     *
     * @param  string $url URL.
     * @return string
     */
    protected function get_formatted_url($url)
    {
        // stub
    }

    /**
     * Make validation.
     *
     * @since  2.4.0
     * @throws Exception When validate fails.
     */
    protected function make_validation()
    {
        // stub
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
        // stub
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
        // stub
    }

    /**
     * Handle auth requests.
     *
     * @since 2.4.0
     * @throws Exception When auth_endpoint validation fails.
     */
    public function handle_auth_requests()
    {
        // stub
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
        // stub
    }

    /**
     * Maybe delete key.
     *
     * @since 2.4.0
     *
     * @param array $key Key.
     */
    private function maybe_delete_key($key)
    {
        // stub
    }

}

