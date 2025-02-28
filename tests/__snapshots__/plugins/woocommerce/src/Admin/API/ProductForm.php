<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * ProductForm Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class ProductForm extends \WC_REST_Data_Controller
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
    protected $rest_base = 'product-form';
    /**
     * Register routes.
     */
    public function register_routes()
{
}
    /**
     * Check if a given request has access to manage woocommerce.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_product_form_permission_check($request)
{
}
    /**
     * Get the form fields.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function get_fields($request)
{
}
    /**
     * Get the form config.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function get_form_config($request)
{
}
}