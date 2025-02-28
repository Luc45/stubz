<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1\AI;

/**
 * Middleware class.
 *
 * @internal
 */
class Middleware
{
    /**
     * Ensure that the user is allowed to make this request.
     *
     * @throws RouteException If the user is not allowed to make this request.
     * @return boolean
     */
    public static function is_authorized()
    {
    }
}