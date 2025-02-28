<?php

/**
 * Standard way of retrieving products based on certain parameters.
 *
 * This function should be used for product retrieval so that we have a data agnostic
 * way to get a list of products.
 *
 * Args and usage: https://github.com/woocommerce/woocommerce/wiki/wc_get_products-and-WC_Product_Query
 *
 * @since  3.0.0
 * @param  array $args Array of args (above).
 * @return array|stdClass Number of pages and an array of product objects if
 *                             paginate is true, or just an array of values.
 */
function wc_get_products($args)
{
}
/**
 * Main function for returning products, uses the WC_Product_Factory class.
 *
 * This function should only be called after 'init' action is finished, as there might be taxonomies that are getting
 * registered during the init action.
 *
 * @since 2.2.0
 *
 * @param mixed $the_product Post object or post ID of the product.
 * @param array $deprecated Previously used to pass arguments to the factory, e.g. to force a type.
 * @return WC_Product|null|false
 */
function wc_get_product($the_product = \false, $deprecated = array())
{
}
/**
 * Get a product object.
 *
 * @see WC_Product_Factory::get_product_classname
 * @since 3.9.0
 * @param string $product_type Product type. If used an invalid type a WC_Product_Simple instance will be returned.
 * @param int    $product_id   Product ID.
 * @return WC_Product
 */
function wc_get_product_object($product_type, $product_id = 0)
{
}
/**
 * Returns whether or not SKUS are enabled.
 *
 * @return bool
 */
function wc_product_sku_enabled()
{
}
/**
 * Returns whether or not product weights are enabled.
 *
 * @return bool
 */
function wc_product_weight_enabled()
{
}
/**
 * Returns whether or not product dimensions (HxWxD) are enabled.
 *
 * @return bool
 */
function wc_product_dimensions_enabled()
{
}
/**
 * Clear transient cache for product data.
 *
 * @param int $post_id (default: 0) The product ID.
 */
function wc_delete_product_transients($post_id = 0)
{
}
/**
 * Function that returns an array containing the IDs of the products that are on sale.
 *
 * @since 2.0
 * @return array
 */
function wc_get_product_ids_on_sale()
{
}
/**
 * Function that returns an array containing the IDs of the featured products.
 *
 * @since 2.1
 * @return array
 */
function wc_get_featured_product_ids()
{
}
/**
 * Filter to allow product_cat in the permalinks for products.
 *
 * @param  string  $permalink The existing permalink URL.
 * @param  WP_Post $post WP_Post object.
 * @return string
 */
function wc_product_post_type_link($permalink, $post)
{
}
/**
 * Ensure that the product_cat value determined in `wc_product_post_type_link` is the canonical value.
 *
 * If other values are used in this part of the permalink, it will be redirected.
 *
 * @return void
 */
function wc_product_canonical_redirect() : void
{
}
/**
 * Get the placeholder image URL either from media, or use the fallback image.
 *
 * @param string $size Thumbnail size to use.
 * @return string
 */
function wc_placeholder_img_src($size = 'woocommerce_thumbnail')
{
}
/**
 * Get the placeholder image.
 *
 * Uses wp_get_attachment_image if using an attachment ID @since 3.6.0 to handle responsiveness.
 *
 * @param string       $size Image size.
 * @param string|array $attr Optional. Attributes for the image markup. Default empty.
 * @return string
 */
function wc_placeholder_img($size = 'woocommerce_thumbnail', $attr = '')
{
}
/**
 * Variation Formatting.
 *
 * Gets a formatted version of variation data or item meta.
 *
 * @param array|WC_Product_Variation $variation Variation object.
 * @param bool                       $flat Should this be a flat list or HTML list? (default: false).
 * @param bool                       $include_names include attribute names/labels in the list.
 * @param bool                       $skip_attributes_in_name Do not list attributes already part of the variation name.
 * @return string
 */
function wc_get_formatted_variation($variation, $flat = \false, $include_names = \true, $skip_attributes_in_name = \false)
{
}
/**
 * Function which handles the start and end of scheduled sales via cron.
 */
function wc_scheduled_sales()
{
}
/**
 * Get attachment image attributes.
 *
 * @param array $attr Image attributes.
 * @return array
 */
function wc_get_attachment_image_attributes($attr)
{
}
/**
 * Prepare attachment for JavaScript.
 *
 * @param array $response JS version of a attachment post object.
 * @return array
 */
function wc_prepare_attachment_for_js($response)
{
}
/**
 * Track product views.
 */
function wc_track_product_view()
{
}
/**
 * Get product types.
 *
 * @since 2.2
 * @return array
 */
function wc_get_product_types()
{
}
/**
 * Check if product sku is unique.
 *
 * @since 2.2
 * @param int    $product_id Product ID.
 * @param string $sku Product SKU.
 * @return bool
 */
function wc_product_has_unique_sku($product_id, $sku)
{
}
/**
 * Check if product unique ID is unique.
 *
 * @since 9.1.0
 * @param int    $product_id Product ID.
 * @param string $global_unique_id Product Unique ID.
 * @return bool
 */
function wc_product_has_global_unique_id($product_id, $global_unique_id)
{
}
/**
 * Force a unique SKU.
 *
 * @since  3.0.0
 * @param  integer $product_id Product ID.
 */
function wc_product_force_unique_sku($product_id)
{
}
/**
 * Recursively appends a suffix until a unique SKU is found.
 *
 * @since  3.0.0
 * @param  integer $product_id Product ID.
 * @param  string  $sku Product SKU.
 * @param  integer $index An optional index that can be added to the product SKU.
 * @return string
 */
function wc_product_generate_unique_sku($product_id, $sku, $index = 0)
{
}
/**
 * Get product ID by SKU.
 *
 * @since  2.3.0
 * @param  string $sku Product SKU.
 * @return int
 */
function wc_get_product_id_by_sku($sku)
{
}
/**
 * Get product ID by Unique ID.
 *
 * @since  9.1.0
 * @param  string $global_unique_id Product Unique ID.
 * @return int|null
 */
function wc_get_product_id_by_global_unique_id($global_unique_id)
{
}
/**
 * Get attributes/data for an individual variation from the database and maintain it's integrity.
 *
 * @since  2.4.0
 * @param  int $variation_id Variation ID.
 * @return array
 */
function wc_get_product_variation_attributes($variation_id)
{
}
/**
 * Get all product cats for a product by ID, including hierarchy
 *
 * @since  2.5.0
 * @param  int $product_id Product ID.
 * @return array
 */
function wc_get_product_cat_ids($product_id)
{
}
/**
 * Gets data about an attachment, such as alt text and captions.
 *
 * @since 2.6.0
 *
 * @param int|null        $attachment_id Attachment ID.
 * @param WC_Product|bool $product WC_Product object.
 *
 * @return array
 */
function wc_get_product_attachment_props($attachment_id = \null, $product = \false)
{
}
/**
 * Get product visibility options.
 *
 * @since 3.0.0
 * @return array
 */
function wc_get_product_visibility_options()
{
}
/**
 * Get product tax class options.
 *
 * @since 3.0.0
 * @return array
 */
function wc_get_product_tax_class_options()
{
}
/**
 * Get stock status options.
 *
 * @since 3.0.0
 * @return array
 */
function wc_get_product_stock_status_options()
{
}
/**
 * Get backorder options.
 *
 * @since 3.0.0
 * @return array
 */
function wc_get_product_backorder_options()
{
}
/**
 * Get related products based on product category and tags.
 *
 * @since  3.0.0
 * @param  int   $product_id  Product ID.
 * @param  int   $limit       Limit of results.
 * @param  array $exclude_ids Exclude IDs from the results.
 * @return array
 */
function wc_get_related_products($product_id, $limit = 5, $exclude_ids = array())
{
}
/**
 * Retrieves product term ids for a taxonomy.
 *
 * @since  3.0.0
 * @param  int    $product_id Product ID.
 * @param  string $taxonomy   Taxonomy slug.
 * @return array
 */
function wc_get_product_term_ids($product_id, $taxonomy)
{
}
/**
 * For a given product, and optionally price/qty, work out the price with tax included, based on store settings.
 *
 * @since  3.0.0
 * @param  WC_Product $product WC_Product object.
 * @param  array      $args Optional arguments to pass product quantity and price.
 * @return float|string Price with tax included, or an empty string if price calculation failed.
 */
function wc_get_price_including_tax($product, $args = array())
{
}
/**
 * For a given product, and optionally price/qty, work out the price with tax excluded, based on store settings.
 *
 * @since  3.0.0
 * @param  WC_Product $product WC_Product object.
 * @param  array      $args Optional arguments to pass product quantity and price.
 * @return float|string Price with tax excluded, or an empty string if price calculation failed.
 */
function wc_get_price_excluding_tax($product, $args = array())
{
}
/**
 * Returns the price including or excluding tax.
 *
 * By default it's based on the 'woocommerce_tax_display_shop' setting.
 * Set `$arg['display_context']` to 'cart' to base on the 'woocommerce_tax_display_cart' setting instead.
 *
 * @since  3.0.0
 * @since  7.6.0 Added `display_context` argument.
 *
 * @param  WC_Product $product WC_Product object.
 * @param  array      $args Optional arguments to pass product quantity and price.
 * @return float
 */
function wc_get_price_to_display($product, $args = array())
{
}
/**
 * Returns the product categories in a list.
 *
 * @param int    $product_id Product ID.
 * @param string $sep (default: ', ').
 * @param string $before (default: '').
 * @param string $after (default: '').
 * @return string
 */
function wc_get_product_category_list($product_id, $sep = ', ', $before = '', $after = '')
{
}
/**
 * Returns the product tags in a list.
 *
 * @param int    $product_id Product ID.
 * @param string $sep (default: ', ').
 * @param string $before (default: '').
 * @param string $after (default: '').
 * @return string
 */
function wc_get_product_tag_list($product_id, $sep = ', ', $before = '', $after = '')
{
}
/**
 * Callback for array filter to get visible only.
 *
 * @since  3.0.0
 * @param  WC_Product $product WC_Product object.
 * @return bool
 */
function wc_products_array_filter_visible($product)
{
}
/**
 * Callback for array filter to get visible grouped products only.
 *
 * @since  3.1.0
 * @param  WC_Product $product WC_Product object.
 * @return bool
 */
function wc_products_array_filter_visible_grouped($product)
{
}
/**
 * Callback for array filter to get products the user can edit only.
 *
 * @since  3.0.0
 * @param  WC_Product $product WC_Product object.
 * @return bool
 */
function wc_products_array_filter_editable($product)
{
}
/**
 * Callback for array filter to get products the user can view only.
 *
 * @since  3.4.0
 * @param  WC_Product $product WC_Product object.
 * @return bool
 */
function wc_products_array_filter_readable($product)
{
}
/**
 * Sort an array of products by a value.
 *
 * @since  3.0.0
 *
 * @param array  $products List of products to be ordered.
 * @param string $orderby Optional order criteria.
 * @param string $order Ascending or descending order.
 *
 * @return array
 */
function wc_products_array_orderby($products, $orderby = 'date', $order = 'desc')
{
}
/**
 * Sort by title.
 *
 * @since  3.0.0
 * @param  WC_Product $a First WC_Product object.
 * @param  WC_Product $b Second WC_Product object.
 * @return int
 */
function wc_products_array_orderby_title($a, $b)
{
}
/**
 * Sort by id.
 *
 * @since  3.0.0
 * @param  WC_Product $a First WC_Product object.
 * @param  WC_Product $b Second WC_Product object.
 * @return int
 */
function wc_products_array_orderby_id($a, $b)
{
}
/**
 * Sort by date.
 *
 * @since  3.0.0
 * @param  WC_Product $a First WC_Product object.
 * @param  WC_Product $b Second WC_Product object.
 * @return int
 */
function wc_products_array_orderby_date($a, $b)
{
}
/**
 * Sort by modified.
 *
 * @since  3.0.0
 * @param  WC_Product $a First WC_Product object.
 * @param  WC_Product $b Second WC_Product object.
 * @return int
 */
function wc_products_array_orderby_modified($a, $b)
{
}
/**
 * Sort by menu order.
 *
 * @since  3.0.0
 * @param  WC_Product $a First WC_Product object.
 * @param  WC_Product $b Second WC_Product object.
 * @return int
 */
function wc_products_array_orderby_menu_order($a, $b)
{
}
/**
 * Sort by price low to high.
 *
 * @since  3.0.0
 * @param  WC_Product $a First WC_Product object.
 * @param  WC_Product $b Second WC_Product object.
 * @return int
 */
function wc_products_array_orderby_price($a, $b)
{
}
/**
 * Queue a product for syncing at the end of the request.
 *
 * @param int $product_id Product ID.
 */
function wc_deferred_product_sync($product_id)
{
}
/**
 * See if the lookup table is being generated already.
 *
 * @since 3.6.0
 * @return bool
 */
function wc_update_product_lookup_tables_is_running()
{
}
/**
 * Populate lookup table data for products.
 *
 * @since 3.6.0
 */
function wc_update_product_lookup_tables()
{
}
/**
 * Populate lookup table column data.
 *
 * @since 3.6.0
 * @param string $column Column name to set.
 */
function wc_update_product_lookup_tables_column($column)
{
}
/**
 * Populate rating count lookup table data for products.
 *
 * @since 3.6.0
 * @param array $rows Rows of rating counts to update in lookup table.
 */
function wc_update_product_lookup_tables_rating_count($rows)
{
}
/**
 * Populate a batch of rating count lookup table data for products.
 *
 * @since 3.6.2
 * @param array $offset Offset to query.
 * @param array $limit  Limit to query.
 */
function wc_update_product_lookup_tables_rating_count_batch($offset = 0, $limit = 0)
{
}
/**
 * Attach product featured image. Use image filename to match a product sku when product is not provided.
 *
 * @since 8.5.0
 * @param int        $attachment_id Media attachment ID.
 * @param WC_Product $product Optional product object.
 * @param bool       $save_product If true, the changes in the product will be saved before the method returns.
 * @return void
 */
function wc_product_attach_featured_image($attachment_id, $product = \null, $save_product = \true)
{
}