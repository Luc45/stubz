<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductForm;

/**
 * Section class.
 */
class Section
{
    /**
     * Constructor
     *
     * @param string $id Section id.
     * @param string $plugin_id Plugin id.
     * @param array  $additional_args Array containing additional arguments.
     *     $args = array(
     *       'order'       => (int) Section order.
     *       'title'       => (string) Section description.
     *       'description' => (string) Section description.
     *     ).
     * @throws \Exception If there are missing arguments.
     */
    public function __construct($id, $plugin_id, $additional_args)
{
}
}