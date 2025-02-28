<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductForm;

/**
 * Component class.
 */
abstract class Component
{
    /**
     * Product Component traits.
     */
    use \Automattic\WooCommerce\Internal\Admin\ProductForm\ComponentTrait;
    /**
     * Component additional arguments.
     *
     * @var array
     */
    protected $additional_args;
    /**
     * Constructor
     *
     * @param string $id Component id.
     * @param string $plugin_id Plugin id.
     * @param array  $additional_args Array containing additional arguments.
     */
    public function __construct($id, $plugin_id, $additional_args)
    {
    }
    /**
     * Component arguments.
     *
     * @return array
     */
    public function get_additional_args()
    {
    }
    /**
     * Component arguments.
     *
     * @param string $key key of argument.
     * @return mixed
     */
    public function get_additional_argument($key)
    {
    }
    /**
     * Get the component as JSON.
     *
     * @return array
     */
    public function get_json()
    {
    }
    /**
     * Sorting function for product form component.
     *
     * @param Component $a Component a.
     * @param Component $b Component b.
     * @param array     $sort_by key and order to sort by.
     * @return int
     */
    public static function sort($a, $b, $sort_by = array())
    {
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
    }
    /**
     * Array of required arguments.
     *
     * @var array
     */
    protected $required_arguments = array();
    /**
     * Get missing arguments of args array.
     *
     * @param array $args field arguments.
     * @return array
     */
    public function get_missing_arguments($args)
    {
    }
}