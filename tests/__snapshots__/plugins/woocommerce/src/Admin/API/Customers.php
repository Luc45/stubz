<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Customers controller.
 *
 * @internal
 * @extends \Automattic\WooCommerce\Admin\API\Reports\Customers\Controller
 */
class Customers
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'customers';

    /**
     * Register the routes for customers.
     */
    public function register_routes()
    {
        // stub
    }

    /**
     * Maps query arguments from the REST request.
     *
     * @param array $request Request array.
     * @return array
     */
    protected function prepare_reports_query($request)
    {
        // stub
    }

    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

}