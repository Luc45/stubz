<?php
/**
 * REST API Coupons controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Posts_Controller
 */
class WC_REST_Coupons_V1_Controller extends \WC_REST_Posts_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v1';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'coupons';
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'shop_coupon';
    /**
     * Coupons actions.
     */
    public function __construct()
{
}
    /**
     * Register the routes for coupons.
     */
    public function register_routes()
{
}
    /**
     * Query args.
     *
     * @param array $args Query args
     * @param WP_REST_Request $request Request data.
     * @return array
     */
    public function query_args($args, $request)
{
}
    /**
     * Prepare a single coupon output for response.
     *
     * @param WP_Post $post Post object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $data
     */
    public function prepare_item_for_response($post, $request)
{
}
    /**
     * Only return writable props from schema.
     * @param  array $schema
     * @return bool
     */
    protected function filter_writable_props($schema)
{
}
    /**
     * Prepare a single coupon for create or update.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_Error|stdClass $data Post object.
     */
    protected function prepare_item_for_database($request)
{
}
    /**
     * Create a single item.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
{
}
    /**
     * Update a single coupon.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
{
}
    /**
     * Saves a coupon to the database.
     *
     * @since 3.0.0
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|int
     */
    protected function save_coupon($request)
{
}
    /**
     * Get the Coupon's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
{
}
    /**
     * Get the query params for collections of attachments.
     *
     * @return array
     */
    public function get_collection_params()
{
}
}
