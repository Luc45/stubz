<?php

namespace Automattic\WooCommerce\Proxies;

/**
 * Proxy class to access legacy WooCommerce functionality.
 *
 * This class should be used to interact with code outside the `src` directory, especially functions and classes
 * in the `includes` directory, unless a more specific proxy exists for the functionality at hand (e.g. `ActionsProxy`).
 * Idempotent functions can be executed directly.
 */
class LegacyProxy
{
    /**
     * Gets an instance of a given legacy class.
     * This must not be used to get instances of classes in the `src` directory.
     *
     * If a given class needs a special procedure to get an instance of it,
     * please add a private get_instance_of_(lowercased_class_name) and it will be
     * automatically invoked. See also how objects of classes having a static `instance`
     * method are retrieved, similar approaches can be used as needed to make use
     * of existing factory methods such as e.g. 'load'.
     *
     * @param string $class_name The name of the class to get an instance for.
     * @param mixed  ...$args Parameters to be passed to the class constructor or to the appropriate internal 'get_instance_of_' method.
     *
     * @return object The instance of the class.
     * @throws \Exception The requested class has a namespace starting with ' Automattic\WooCommerce', or there was an error creating an instance of the class.
     */
    public function get_instance_of(string $class_name, ...$args)
{
}
    /**
     * Call a user function. This should be used to execute any non-idempotent function, especially
     * those in the `includes` directory or provided by WordPress.
     *
     * @param string $function_name The function to execute.
     * @param mixed  ...$parameters The parameters to pass to the function.
     *
     * @return mixed The result from the function.
     */
    public function call_function($function_name, ...$parameters)
{
}
    /**
     * Call a static method in a class. This should be used to execute any non-idempotent method in classes
     * from the `includes` directory.
     *
     * @param string $class_name The name of the class containing the method.
     * @param string $method_name The name of the method.
     * @param mixed  ...$parameters The parameters to pass to the method.
     *
     * @return mixed The result from the method.
     */
    public function call_static($class_name, $method_name, ...$parameters)
{
}
    /**
     * Get the value of a global.
     *
     * @param string $global_name The name of the global to get the value for.
     * @return mixed The value of the global.
     */
    public function get_global(string $global_name)
{
}
    /**
     * Terminates execution of the script.
     *
     * @param int|string $status An error code to be returned, or an error message to be shown.
     * @return void
     */
    public function exit($status = '')
{
}
}