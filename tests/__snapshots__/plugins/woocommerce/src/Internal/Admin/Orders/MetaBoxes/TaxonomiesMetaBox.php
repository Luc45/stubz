<?php

namespace Automattic\WooCommerce\Internal\Admin\Orders\MetaBoxes;

/**
 * TaxonomiesMetaBox class, renders taxonomy sidebar widget on order edit screen.
 */
class TaxonomiesMetaBox
{
    /**
     * Dependency injection init method.
     *
     * @param OrdersTableDataStore $orders_table_data_store Order Table data store class.
     *
     * @return void
     */
    public function init(Automattic\WooCommerce\Internal\DataStores\Orders\OrdersTableDataStore $orders_table_data_store)
{
}
    /**
     * Registers meta boxes to be rendered in order edit screen for taxonomies.
     *
     * Note: This is re-implementation of part of WP core's `register_and_do_post_meta_boxes` function. Since the code block that add meta box for taxonomies is not filterable, we have to re-implement it.
     *
     * @param string $screen_id Screen ID.
     * @param string $order_type Order type to register meta boxes for.
     *
     * @return void
     */
    public function add_taxonomies_meta_boxes(string $screen_id, string $order_type)
{
}
    /**
     * Save handler for taxonomy data.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param array|null         $taxonomy_input Taxonomy input passed from input.
     */
    public function save_taxonomies(WC_Abstract_Order $order, $taxonomy_input)
{
}
    /**
     * Add the categories meta box to the order screen. This is just a wrapper around the post_categories_meta_box.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param array              $box   Meta box args.
     *
     * @return void
     */
    public function order_categories_meta_box($order, $box)
{
}
    /**
     * Add the tags meta box to the order screen. This is just a wrapper around the post_tags_meta_box.
     *
     * @param \WC_Abstract_Order $order Order object.
     * @param array              $box   Meta box args.
     *
     * @return void
     */
    public function order_tags_meta_box($order, $box)
{
}
}