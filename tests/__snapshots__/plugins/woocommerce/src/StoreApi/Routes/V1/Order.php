<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * Order class.
 */
class Order
{
    const IDENTIFIER = 'order';

    const SCHEMA_TYPE = 'order';

    /**
     * Order controller class instance.
     *
     * @var OrderController
     */
    protected $order_controller = null;

    /**
     * Constructor.
     *
     * @param SchemaController $schema_controller Schema Controller instance.
     * @param AbstractSchema   $schema Schema class for this route.
     */
    public function __construct(Automattic\WooCommerce\StoreApi\SchemaController $schema_controller, Automattic\WooCommerce\StoreApi\Schemas\v1\AbstractSchema $schema)
    {
        // stub
    }

    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
    {
        // stub
    }

    /**
     * Get the path of this rest route.
     *
     * @return string
     */
    public static function get_path_regex()
    {
        // stub
    }

    /**
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
        // stub
    }

    /**
     * Handle the request and return a valid response for this endpoint.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(WP_REST_Request $request)
    {
        // stub
    }

}