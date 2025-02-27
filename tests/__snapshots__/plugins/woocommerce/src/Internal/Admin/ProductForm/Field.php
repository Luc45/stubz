<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductForm;

/**
 * Field class.
 */
class Field
{
    /**
     * Constructor
     *
     * @param string $id Field id.
     * @param string $plugin_id Plugin id.
     * @param array  $additional_args Array containing the necessary arguments.
     *     $args = array(
     *       'type'            => (string) Field type. Required.
     *       'section'         => (string) Field location. Required.
     *       'order'           => (int) Field order.
     *       'properties'      => (array) Field properties.
     *     ).
     * @throws \Exception If there are missing arguments.
     */
    public function __construct($id, $plugin_id, $additional_args)
    {
        // stub
    }

}