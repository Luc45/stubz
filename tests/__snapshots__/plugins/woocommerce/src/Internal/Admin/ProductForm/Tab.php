<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductForm;

/**
 * Field class.
 */
class Tab
{
    /**
     * Constructor
     *
     * @param string $id Field id.
     * @param string $plugin_id Plugin id.
     * @param array  $additional_args Array containing the necessary arguments.
     *     $args = array(
     *       'name'            => (string) Tab name. Required.
     *       'title'         => (string) Tab title. Required.
     *       'order'           => (int) Tab order.
     *       'properties'      => (array) Tab properties.
     *     ).
     * @throws \Exception If there are missing arguments.
     */
    public function __construct($id, $plugin_id, $additional_args)
    {
        // stub
    }

}