<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * REST API Data countries controller class.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class MobileAppMagicLink
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-admin';

    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'mobile-app';

    /**
     * Register routes.
     *
     * @since 7.0.0
     */
    public function register_routes()
{
}
    /**
     * Sends request to generate magic link email.
     *
     * @return \WP_REST_Response|\WP_Error
     */
    public function send_magic_link()
{
}
}