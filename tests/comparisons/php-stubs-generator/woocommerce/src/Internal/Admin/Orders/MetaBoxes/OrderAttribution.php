<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders\MetaBoxes;

/**
 * Class OrderAttribution
 *
 * @since 8.5.0
 */
class OrderAttribution
{
    use \Automattic\WooCommerce\Internal\Traits\OrderAttributionMeta;

    /**
     * OrderAttribution constructor.
     */
    public function __construct()
    {
    }
    /**
     * Format the meta data for display.
     *
     * @since 8.5.0
     *
     * @param array $meta The array of meta data to format.
     *
     * @return void
     */
    public function format_meta_data(array &$meta)
    {
    }
    /**
     * Output the attribution data metabox for the order.
     *
     * @since 8.5.0
     *
     * @param WC_Order $order The order object.
     *
     * @return void
     */
    public function output(\WC_Order $order)
    {
    }
}
