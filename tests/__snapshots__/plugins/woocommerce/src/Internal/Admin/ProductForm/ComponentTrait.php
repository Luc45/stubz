<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductForm;

/**
 * ComponentTrait class.
 */
trait ComponentTrait
{
    /**
     * Component ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Plugin ID.
     *
     * @var string
     */
    protected $plugin_id;
    /**
     * Product form component location.
     *
     * @var string
     */
    protected $location;
    /**
     * Product form component order.
     *
     * @var number
     */
    protected $order;
    /**
     * Return id.
     *
     * @return string
     */
    public function get_id()
{
}
    /**
     * Return plugin id.
     *
     * @return string
     */
    public function get_plugin_id()
{
}
}