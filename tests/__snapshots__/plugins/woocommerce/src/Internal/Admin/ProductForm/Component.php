<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductForm;

/**
 * Component class.
 */
abstract class Component extends \
{
    /**
     * Component additional arguments.
     *
     * @var array
     */
    protected $additional_args = null;

    /**
     * Array of required arguments.
     *
     * @var array
     */
    protected $required_arguments = array(
);

    /**
     * Constructor
     *
     * @param string $id Component id.
     * @param string $plugin_id Plugin id.
     * @param array  $additional_args Array containing additional arguments.
     */
    public function __construct($id, $plugin_id, $additional_args)
    {
        // stub
    }

    /**
     * Component arguments.
     *
     * @return array
     */
    public function get_additional_args()
    {
        // stub
    }

    /**
     * Component arguments.
     *
     * @param string $key key of argument.
     * @return mixed
     */
    public function get_additional_argument($key)
    {
        // stub
    }

    /**
     * Get the component as JSON.
     *
     * @return array
     */
    public function get_json()
    {
        // stub
    }

    /**
     * Sorting function for product form component.
     *
     * @param Component $a Component a.
     * @param Component $b Component b.
     * @param array     $sort_by key and order to sort by.
     * @return int
     */
    public static function sort($a, $b, $sort_by = array(
))
    {
        // stub
    }

    /**
     * Gets argument by dot notation path.
     *
     * @param array  $arguments Arguments array.
     * @param string $path Path for argument key.
     * @param string $delimiter Path delimiter, default: '.'.
     * @return mixed|null
     */
    public static function get_argument_from_path($arguments, $path, $delimiter = '.')
    {
        // stub
    }

    /**
     * Get missing arguments of args array.
     *
     * @param array $args field arguments.
     * @return array
     */
    public function get_missing_arguments($args)
    {
        // stub
    }

}

