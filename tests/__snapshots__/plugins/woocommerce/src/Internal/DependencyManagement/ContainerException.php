<?php

namespace Automattic\WooCommerce\Internal\DependencyManagement;

/**
 * Class ContainerException.
 * Used to signal error conditions related to the dependency injection container.
 */
class ContainerException extends \Exception implements \Stringable, \Throwable
{
    /**
     * Create a new instance of the class.
     *
     * @param null            $message The exception message to throw.
     * @param int             $code The error code.
     * @param \Exception|null $previous The previous throwable used for exception chaining.
     */
    public function __construct($message = null, $code = 0, Exception|null $previous = null)
{
}
}