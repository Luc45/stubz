<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * AbstractTermsRoute class.
 */
abstract class AbstractTermsRoute
{
    const SCHEMA_TYPE = 'term';

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
     * Get terms matching passed in args.
     *
     * @param string           $taxonomy Taxonomy to get terms from.
     * @param \WP_REST_Request $request Request object.
     *
     * @return \WP_REST_Response
     */
    protected function get_terms_response($taxonomy, $request)
    {
        // stub
    }

    /**
     * Get count of terms for current query.
     *
     * @param string $taxonomy Taxonomy to get terms from.
     * @param array  $args Array of args to pass to wp_count_terms.
     * @return int
     */
    protected function get_term_count($taxonomy, $args)
    {
        // stub
    }

}

