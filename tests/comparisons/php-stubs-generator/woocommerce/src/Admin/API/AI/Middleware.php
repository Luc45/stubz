<?php

namespace Automattic\WooCommerce\Admin\API\AI;

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
     * @return boolean|WP_Error
     * @throws RouteException If the user is not allowed to make this request.
     */
    public static function is_authorized()
    {
    }
}