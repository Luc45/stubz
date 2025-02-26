<?php

namespace Automattic\WooCommerce\Admin\API\AI;

/**
 * AI Endpoint base controller
 *
 * @internal
 */
abstract class AIEndpoint
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
    protected $rest_base = 'ai';

    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = null;

    /**
     * Register routes.
     *
     * @param array $args Optional. Either an array of options for the endpoint,
     * or an array of arrays for multiple methods. Default empty array.
     */
    public function register($args)
    {
        // stub
    }

    /**
     * Return schema properties.
     *
     * @return array
     */
    public function get_schema()
    {
        // stub
    }

}

