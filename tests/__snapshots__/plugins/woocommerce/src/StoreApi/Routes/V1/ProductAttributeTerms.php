<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * ProductAttributeTerms class.
 */
class ProductAttributeTerms
{
    const IDENTIFIER = 'product-attribute-terms';

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
     * Get the query params for collections of attributes.
     *
     * @return array
     */
    public function get_collection_params()
    {
        // stub
    }

    /**
     * Get a collection of attribute terms.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(WP_REST_Request $request)
    {
        // stub
    }

}