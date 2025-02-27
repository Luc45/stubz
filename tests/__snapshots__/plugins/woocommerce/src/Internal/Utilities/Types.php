<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * Utilities to help ensure type safety.
 */
class Types
{
    /**
     * Checks if $thing is an instance of $desired_type.
     *
     * If the check succeeds, $thing will be returned without further modification. If the check fails, then either
     * an exception will be thrown or, if an $on_failure callback was supplied, it will be invoked to either generate
     * an appropriate return value or to throw a more specific exception.
     *
     * Please note that the failure handler will be passed two arguments:
     *
     *     $on_failure( $object, $desired_type )
     *
     * @since 9.1.0
     * @throws InvalidArgumentException If $object does not match $desired_type, and an $on_failure callback was not supplied.
     *
     * @param mixed     $thing        The value or reference to be assessed.
     * @param string    $desired_type What we expect the return type to be, if it is not a WP_Error.
     * @param ?callable $on_failure   If provided, and if evaluation fails, this will be invoked to generate a return value.
     *
     * @return mixed
     */
    public static function ensure_instance_of($thing, string $desired_type, callable|null $on_failure = null)
    {
        // stub
    }

}