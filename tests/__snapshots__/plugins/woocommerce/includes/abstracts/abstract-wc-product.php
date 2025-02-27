<?php

/**
 * Abstract Product Class
 *
 * The WooCommerce product class handles individual product data.
 *
 * @version 3.0.0
 * @package WooCommerce\Abstracts
 */
class WC_Product
{
    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'product';

    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'product';

    /**
     * Cache group.
     *
     * @var string
     */
    protected $cache_group = 'products';

    /**
     * Stores product data.
     *
     * @var array
     */
    protected $data = array (
  'name' => '',
  'slug' => '',
  'date_created' => null,
  'date_modified' => null,
  'status' => false,
  'featured' => false,
  'catalog_visibility' => 'visible',
  'description' => '',
  'short_description' => '',
  'sku' => '',
  'global_unique_id' => '',
  'price' => '',
  'regular_price' => '',
  'sale_price' => '',
  'date_on_sale_from' => null,
  'date_on_sale_to' => null,
  'total_sales' => '0',
  'tax_status' => 'taxable',
  'tax_class' => '',
  'manage_stock' => false,
  'stock_quantity' => null,
  'stock_status' => 'instock',
  'backorders' => 'no',
  'low_stock_amount' => '',
  'sold_individually' => false,
  'weight' => '',
  'length' => '',
  'width' => '',
  'height' => '',
  'upsell_ids' => 
  array (
  ),
  'cross_sell_ids' => 
  array (
  ),
  'parent_id' => 0,
  'reviews_allowed' => true,
  'purchase_note' => '',
  'attributes' => 
  array (
  ),
  'default_attributes' => 
  array (
  ),
  'menu_order' => 0,
  'post_password' => '',
  'virtual' => false,
  'downloadable' => false,
  'category_ids' => 
  array (
  ),
  'tag_ids' => 
  array (
  ),
  'shipping_class_id' => 0,
  'downloads' => 
  array (
  ),
  'image_id' => '',
  'gallery_image_ids' => 
  array (
  ),
  'download_limit' => -1,
  'download_expiry' => -1,
  'rating_counts' => 
  array (
  ),
  'average_rating' => 0,
  'review_count' => 0,
  'cogs_value' => null,
);

    /**
     * Supported features such as 'ajax_add_to_cart'.
     *
     * @var array
     */
    protected $supports = array (
);

    /**
     * Get the product if ID is passed, otherwise the product is new and empty.
     * This class should NOT be instantiated, but the wc_get_product() function
     * should be used. It is possible, but the wc_get_product() is preferred.
     *
     * @param int|WC_Product|object $product Product to init.
     */
    public function __construct($product = 0)
    {
        // stub
    }

    /**
     * Get internal type. Should return string and *should be overridden* by child classes.
     *
     * The product_type property is deprecated but is used here for BW compatibility with child classes which may be defining product_type and not have a get_type method.
     *
     * @since  3.0.0
     * @return string
     */
    public function get_type()
    {
        // stub
    }

    /**
     * Get product name.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_name($context = 'view')
    {
        // stub
    }

    /**
     * Get product slug.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_slug($context = 'view')
    {
        // stub
    }

    /**
     * Get product created date.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_created($context = 'view')
    {
        // stub
    }

    /**
     * Get product modified date.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_modified($context = 'view')
    {
        // stub
    }

    /**
     * Get product status.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_status($context = 'view')
    {
        // stub
    }

    /**
     * If the product is featured.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return boolean
     */
    public function get_featured($context = 'view')
    {
        // stub
    }

    /**
     * Get catalog visibility.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_catalog_visibility($context = 'view')
    {
        // stub
    }

    /**
     * Get product description.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_description($context = 'view')
    {
        // stub
    }

    /**
     * Get product short description.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_short_description($context = 'view')
    {
        // stub
    }

    /**
     * Get SKU (Stock-keeping unit).
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_sku($context = 'view')
    {
        // stub
    }

    /**
     * Get Unique ID.
     *
     * @since 9.1.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_global_unique_id($context = 'view')
    {
        // stub
    }

    /**
     * Returns the product's active price.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string price
     */
    public function get_price($context = 'view')
    {
        // stub
    }

    /**
     * Returns the product's regular price.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string price
     */
    public function get_regular_price($context = 'view')
    {
        // stub
    }

    /**
     * Returns the product's sale price.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string price
     */
    public function get_sale_price($context = 'view')
    {
        // stub
    }

    /**
     * Get date on sale from.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_on_sale_from($context = 'view')
    {
        // stub
    }

    /**
     * Get date on sale to.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_on_sale_to($context = 'view')
    {
        // stub
    }

    /**
     * Get number total of sales.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_total_sales($context = 'view')
    {
        // stub
    }

    /**
     * Returns the tax status.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_tax_status($context = 'view')
    {
        // stub
    }

    /**
     * Returns the tax class.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_tax_class($context = 'view')
    {
        // stub
    }

    /**
     * Return if product manage stock.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return boolean
     */
    public function get_manage_stock($context = 'view')
    {
        // stub
    }

    /**
     * Returns number of items available for sale.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int|null
     */
    public function get_stock_quantity($context = 'view')
    {
        // stub
    }

    /**
     * Return the stock status.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @since  3.0.0
     * @return string
     */
    public function get_stock_status($context = 'view')
    {
        // stub
    }

    /**
     * Get backorders.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @since  3.0.0
     * @return string yes no or notify
     */
    public function get_backorders($context = 'view')
    {
        // stub
    }

    /**
     * Get low stock amount.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @since  3.5.0
     * @return int|string Returns empty string if value not set
     */
    public function get_low_stock_amount($context = 'view')
    {
        // stub
    }

    /**
     * Return if should be sold individually.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @since  3.0.0
     * @return boolean
     */
    public function get_sold_individually($context = 'view')
    {
        // stub
    }

    /**
     * Returns the product's weight.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_weight($context = 'view')
    {
        // stub
    }

    /**
     * Returns the product length.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_length($context = 'view')
    {
        // stub
    }

    /**
     * Returns the product width.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_width($context = 'view')
    {
        // stub
    }

    /**
     * Returns the product height.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_height($context = 'view')
    {
        // stub
    }

    /**
     * Returns formatted dimensions.
     *
     * @param  bool $formatted True by default for legacy support - will be false/not set in future versions to return the array only. Use wc_format_dimensions for formatted versions instead.
     * @return string|array
     */
    public function get_dimensions($formatted = true)
    {
        // stub
    }

    /**
     * Get upsell IDs.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_upsell_ids($context = 'view')
    {
        // stub
    }

    /**
     * Get cross sell IDs.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_cross_sell_ids($context = 'view')
    {
        // stub
    }

    /**
     * Get parent ID.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_parent_id($context = 'view')
    {
        // stub
    }

    /**
     * Return if reviews is allowed.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return bool
     */
    public function get_reviews_allowed($context = 'view')
    {
        // stub
    }

    /**
     * Get purchase note.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_purchase_note($context = 'view')
    {
        // stub
    }

    /**
     * Returns product attributes.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_attributes($context = 'view')
    {
        // stub
    }

    /**
     * Get default attributes.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_default_attributes($context = 'view')
    {
        // stub
    }

    /**
     * Get menu order.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_menu_order($context = 'view')
    {
        // stub
    }

    /**
     * Get post password.
     *
     * @since  3.6.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_post_password($context = 'view')
    {
        // stub
    }

    /**
     * Get category ids.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_category_ids($context = 'view')
    {
        // stub
    }

    /**
     * Get tag ids.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_tag_ids($context = 'view')
    {
        // stub
    }

    /**
     * Get virtual.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return bool
     */
    public function get_virtual($context = 'view')
    {
        // stub
    }

    /**
     * Returns the gallery attachment ids.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_gallery_image_ids($context = 'view')
    {
        // stub
    }

    /**
     * Get shipping class ID.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_shipping_class_id($context = 'view')
    {
        // stub
    }

    /**
     * Get downloads.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_downloads($context = 'view')
    {
        // stub
    }

    /**
     * Get download expiry.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_download_expiry($context = 'view')
    {
        // stub
    }

    /**
     * Get downloadable.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return bool
     */
    public function get_downloadable($context = 'view')
    {
        // stub
    }

    /**
     * Get download limit.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_download_limit($context = 'view')
    {
        // stub
    }

    /**
     * Get main image ID.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_image_id($context = 'view')
    {
        // stub
    }

    /**
     * Get rating count.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array of counts
     */
    public function get_rating_counts($context = 'view')
    {
        // stub
    }

    /**
     * Get average rating.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return float
     */
    public function get_average_rating($context = 'view')
    {
        // stub
    }

    /**
     * Get review count.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_review_count($context = 'view')
    {
        // stub
    }

    /**
     * Set product name.
     *
     * @since 3.0.0
     * @param string $name Product name.
     */
    public function set_name($name)
    {
        // stub
    }

    /**
     * Set product slug.
     *
     * @since 3.0.0
     * @param string $slug Product slug.
     */
    public function set_slug($slug)
    {
        // stub
    }

    /**
     * Set product created date.
     *
     * @since 3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_date_created($date = null)
    {
        // stub
    }

    /**
     * Set product modified date.
     *
     * @since 3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_date_modified($date = null)
    {
        // stub
    }

    /**
     * Set product status.
     *
     * @since 3.0.0
     * @param string $status Product status.
     */
    public function set_status($status)
    {
        // stub
    }

    /**
     * Set if the product is featured.
     *
     * @since 3.0.0
     * @param bool|string $featured Whether the product is featured or not.
     */
    public function set_featured($featured)
    {
        // stub
    }

    /**
     * Set catalog visibility.
     *
     * @since  3.0.0
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     * @param  string $visibility Options: 'hidden', 'visible', 'search' and 'catalog'.
     */
    public function set_catalog_visibility($visibility)
    {
        // stub
    }

    /**
     * Set product description.
     *
     * @since 3.0.0
     * @param string $description Product description.
     */
    public function set_description($description)
    {
        // stub
    }

    /**
     * Set product short description.
     *
     * @since 3.0.0
     * @param string $short_description Product short description.
     */
    public function set_short_description($short_description)
    {
        // stub
    }

    /**
     * Set SKU.
     *
     * @since  3.0.0
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     * @param  string $sku Product SKU.
     */
    public function set_sku($sku)
    {
        // stub
    }

    /**
     * Set global_unique_id
     *
     * @since 9.1.0
     * @param string $global_unique_id Unique ID.
     */
    public function set_global_unique_id($global_unique_id)
    {
        // stub
    }

    /**
     * Set the product's active price.
     *
     * @param string $price Price.
     */
    public function set_price($price)
    {
        // stub
    }

    /**
     * Set the product's regular price.
     *
     * @since 3.0.0
     * @param string $price Regular price.
     */
    public function set_regular_price($price)
    {
        // stub
    }

    /**
     * Set the product's sale price.
     *
     * @since 3.0.0
     * @param string $price sale price.
     */
    public function set_sale_price($price)
    {
        // stub
    }

    /**
     * Set date on sale from.
     *
     * @since 3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_date_on_sale_from($date = null)
    {
        // stub
    }

    /**
     * Set date on sale to.
     *
     * @since 3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_date_on_sale_to($date = null)
    {
        // stub
    }

    /**
     * Set number total of sales.
     *
     * @since 3.0.0
     * @param int $total Total of sales.
     */
    public function set_total_sales($total)
    {
        // stub
    }

    /**
     * Set the tax status.
     *
     * @since  3.0.0
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     * @param  string $status Tax status.
     */
    public function set_tax_status($status)
    {
        // stub
    }

    /**
     * Set the tax class.
     *
     * @since 3.0.0
     * @param string $class Tax class.
     */
    public function set_tax_class($class)
    {
        // stub
    }

    /**
     * Return an array of valid tax classes
     *
     * @return array valid tax classes
     */
    protected function get_valid_tax_classes()
    {
        // stub
    }

    /**
     * Set if product manage stock.
     *
     * @since 3.0.0
     * @param bool $manage_stock Whether or not manage stock is enabled.
     */
    public function set_manage_stock($manage_stock)
    {
        // stub
    }

    /**
     * Set number of items available for sale.
     *
     * @since 3.0.0
     * @param float|null $quantity Stock quantity.
     */
    public function set_stock_quantity($quantity)
    {
        // stub
    }

    /**
     * Set stock status.
     *
     * @param string $status New status.
     */
    public function set_stock_status($status = 'instock')
    {
        // stub
    }

    /**
     * Set backorders.
     *
     * @since 3.0.0
     * @param string $backorders Options: 'yes', 'no' or 'notify'.
     */
    public function set_backorders($backorders)
    {
        // stub
    }

    /**
     * Set low stock amount.
     *
     * @param int|string $amount Empty string if value not set.
     * @since 3.5.0
     */
    public function set_low_stock_amount($amount)
    {
        // stub
    }

    /**
     * Set if should be sold individually.
     *
     * @since 3.0.0
     * @param bool $sold_individually Whether or not product is sold individually.
     */
    public function set_sold_individually($sold_individually)
    {
        // stub
    }

    /**
     * Set the product's weight.
     *
     * @since 3.0.0
     * @param float|string $weight Total weight.
     */
    public function set_weight($weight)
    {
        // stub
    }

    /**
     * Set the product length.
     *
     * @since 3.0.0
     * @param float|string $length Total length.
     */
    public function set_length($length)
    {
        // stub
    }

    /**
     * Set the product width.
     *
     * @since 3.0.0
     * @param float|string $width Total width.
     */
    public function set_width($width)
    {
        // stub
    }

    /**
     * Set the product height.
     *
     * @since 3.0.0
     * @param float|string $height Total height.
     */
    public function set_height($height)
    {
        // stub
    }

    /**
     * Set upsell IDs.
     *
     * @since 3.0.0
     * @param array $upsell_ids IDs from the up-sell products.
     */
    public function set_upsell_ids($upsell_ids)
    {
        // stub
    }

    /**
     * Set crosssell IDs.
     *
     * @since 3.0.0
     * @param array $cross_sell_ids IDs from the cross-sell products.
     */
    public function set_cross_sell_ids($cross_sell_ids)
    {
        // stub
    }

    /**
     * Set parent ID.
     *
     * @since 3.0.0
     * @param int $parent_id Product parent ID.
     */
    public function set_parent_id($parent_id)
    {
        // stub
    }

    /**
     * Set if reviews is allowed.
     *
     * @since 3.0.0
     * @param bool $reviews_allowed Reviews allowed or not.
     */
    public function set_reviews_allowed($reviews_allowed)
    {
        // stub
    }

    /**
     * Set purchase note.
     *
     * @since 3.0.0
     * @param string $purchase_note Purchase note.
     */
    public function set_purchase_note($purchase_note)
    {
        // stub
    }

    /**
     * Set product attributes.
     *
     * Attributes are made up of:
     *     id - 0 for product level attributes. ID for global attributes.
     *     name - Attribute name.
     *     options - attribute value or array of term ids/names.
     *     position - integer sort order.
     *     visible - If visible on frontend.
     *     variation - If used for variations.
     * Indexed by unique key to allow clearing old ones after a set.
     *
     * @since 3.0.0
     * @param array $raw_attributes Array of WC_Product_Attribute objects.
     */
    public function set_attributes($raw_attributes)
    {
        // stub
    }

    /**
     * Set default attributes. These will be saved as strings and should map to attribute values.
     *
     * @since 3.0.0
     * @param array $default_attributes List of default attributes.
     */
    public function set_default_attributes($default_attributes)
    {
        // stub
    }

    /**
     * Set menu order.
     *
     * @since 3.0.0
     * @param int $menu_order Menu order.
     */
    public function set_menu_order($menu_order)
    {
        // stub
    }

    /**
     * Set post password.
     *
     * @since 3.6.0
     * @param int $post_password Post password.
     */
    public function set_post_password($post_password)
    {
        // stub
    }

    /**
     * Set the product categories.
     *
     * @since 3.0.0
     * @param array $term_ids List of terms IDs.
     */
    public function set_category_ids($term_ids)
    {
        // stub
    }

    /**
     * Set the product tags.
     *
     * @since 3.0.0
     * @param array $term_ids List of terms IDs.
     */
    public function set_tag_ids($term_ids)
    {
        // stub
    }

    /**
     * Set if the product is virtual.
     *
     * @since 3.0.0
     * @param bool|string $virtual Whether product is virtual or not.
     */
    public function set_virtual($virtual)
    {
        // stub
    }

    /**
     * Set shipping class ID.
     *
     * @since 3.0.0
     * @param int $id Product shipping class id.
     */
    public function set_shipping_class_id($id)
    {
        // stub
    }

    /**
     * Set if the product is downloadable.
     *
     * @since 3.0.0
     * @param bool|string $downloadable Whether product is downloadable or not.
     */
    public function set_downloadable($downloadable)
    {
        // stub
    }

    /**
     * Set downloads.
     *
     * @throws WC_Data_Exception If an error relating to one of the downloads is encountered.
     *
     * @param array $downloads_array Array of WC_Product_Download objects or arrays.
     *
     * @since 3.0.0
     */
    public function set_downloads($downloads_array)
    {
        // stub
    }

    /**
     * Takes an array of downloadable file representations and converts it into an array of
     * WC_Product_Download objects, indexed by download ID.
     *
     * @param array[]|WC_Product_Download[] $downloads Download data to be re-mapped.
     *
     * @return WC_Product_Download[]
     */
    private function build_downloads_map(array $downloads): array
    {
        // stub
    }

    /**
     * Set download limit.
     *
     * @since 3.0.0
     * @param int|string $download_limit Product download limit.
     */
    public function set_download_limit($download_limit)
    {
        // stub
    }

    /**
     * Set download expiry.
     *
     * @since 3.0.0
     * @param int|string $download_expiry Product download expiry.
     */
    public function set_download_expiry($download_expiry)
    {
        // stub
    }

    /**
     * Set gallery attachment ids.
     *
     * @since 3.0.0
     * @param array $image_ids List of image ids.
     */
    public function set_gallery_image_ids($image_ids)
    {
        // stub
    }

    /**
     * Set main image ID.
     *
     * @since 3.0.0
     * @param int|string $image_id Product image id.
     */
    public function set_image_id($image_id = '')
    {
        // stub
    }

    /**
     * Set rating counts. Read only.
     *
     * @param array $counts Product rating counts.
     */
    public function set_rating_counts($counts)
    {
        // stub
    }

    /**
     * Set average rating. Read only.
     *
     * @param float $average Product average rating.
     */
    public function set_average_rating($average)
    {
        // stub
    }

    /**
     * Set review count. Read only.
     *
     * @param int $count Product review count.
     */
    public function set_review_count($count)
    {
        // stub
    }

    /**
     * Ensure properties are set correctly before save.
     *
     * @since 3.0.0
     */
    public function validate_props()
    {
        // stub
    }

    /**
     * Save data (either create or update depending on if we are working on an existing product).
     *
     * @since  3.0.0
     * @return int
     */
    public function save()
    {
        // stub
    }

    /**
     * Do any extra processing needed before the actual product save
     * (but after triggering the 'woocommerce_before_..._object_save' action)
     *
     * @return mixed A state value that will be passed to after_data_store_save_or_update.
     */
    protected function before_data_store_save_or_update()
    {
        // stub
    }

    /**
     * Do any extra processing needed after the actual product save
     * (but before triggering the 'woocommerce_after_..._object_save' action)
     *
     * @param mixed $state The state object that was returned by before_data_store_save_or_update.
     */
    protected function after_data_store_save_or_update($state)
    {
        // stub
    }

    /**
     * Delete the product, set its ID to 0, and return result.
     *
     * @param  bool $force_delete Should the product be deleted permanently.
     * @return bool result
     */
    public function delete($force_delete = false)
    {
        // stub
    }

    /**
     * If this is a child product, queue its parent for syncing at the end of the request.
     */
    protected function maybe_defer_product_sync()
    {
        // stub
    }

    /**
     * Check if a product supports a given feature.
     *
     * Product classes should override this to declare support (or lack of support) for a feature.
     *
     * @param  string $feature string The name of a feature to test support for.
     * @return bool True if the product supports the feature, false otherwise.
     * @since  2.5.0
     */
    public function supports($feature)
    {
        // stub
    }

    /**
     * Returns whether or not the product post exists.
     *
     * @return bool
     */
    public function exists()
    {
        // stub
    }

    /**
     * Checks the product type.
     *
     * Backwards compatibility with downloadable/virtual.
     *
     * @param  string|array $type Array or string of types.
     * @return bool
     */
    public function is_type($type)
    {
        // stub
    }

    /**
     * Checks if a product is downloadable.
     *
     * @return bool
     */
    public function is_downloadable()
    {
        // stub
    }

    /**
     * Checks if a product is virtual (has no shipping).
     *
     * @return bool
     */
    public function is_virtual()
    {
        // stub
    }

    /**
     * Returns whether or not the product is featured.
     *
     * @return bool
     */
    public function is_featured()
    {
        // stub
    }

    /**
     * Check if a product is sold individually (no quantities).
     *
     * @return bool
     */
    public function is_sold_individually()
    {
        // stub
    }

    /**
     * Returns whether or not the product is visible in the catalog.
     *
     * @return bool
     */
    public function is_visible()
    {
        // stub
    }

    /**
     * Returns whether or not the product is visible in the catalog (doesn't trigger filters).
     *
     * @return bool
     */
    protected function is_visible_core()
    {
        // stub
    }

    /**
     * Returns false if the product cannot be bought.
     *
     * @return bool
     */
    public function is_purchasable()
    {
        // stub
    }

    /**
     * Returns whether or not the product is on sale.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return bool
     */
    public function is_on_sale($context = 'view')
    {
        // stub
    }

    /**
     * Returns whether or not the product has dimensions set.
     *
     * @return bool
     */
    public function has_dimensions()
    {
        // stub
    }

    /**
     * Returns whether or not the product has weight set.
     *
     * @return bool
     */
    public function has_weight()
    {
        // stub
    }

    /**
     * Returns whether or not the product can be purchased.
     * This returns true for 'instock' and 'onbackorder' stock statuses.
     *
     * @return bool
     */
    public function is_in_stock()
    {
        // stub
    }

    /**
     * Checks if a product needs shipping.
     *
     * @return bool
     */
    public function needs_shipping()
    {
        // stub
    }

    /**
     * Returns whether or not the product is taxable.
     *
     * @return bool
     */
    public function is_taxable()
    {
        // stub
    }

    /**
     * Returns whether or not the product shipping is taxable.
     *
     * @return bool
     */
    public function is_shipping_taxable()
    {
        // stub
    }

    /**
     * Returns whether or not the product is stock managed.
     *
     * @return bool
     */
    public function managing_stock()
    {
        // stub
    }

    /**
     * Returns whether or not the product can be backordered.
     *
     * @return bool
     */
    public function backorders_allowed()
    {
        // stub
    }

    /**
     * Returns whether or not the product needs to notify the customer on backorder.
     *
     * @return bool
     */
    public function backorders_require_notification()
    {
        // stub
    }

    /**
     * Check if a product is on backorder.
     *
     * @param  int $qty_in_cart (default: 0).
     * @return bool
     */
    public function is_on_backorder($qty_in_cart = 0)
    {
        // stub
    }

    /**
     * Returns whether or not the product has enough stock for the order.
     *
     * @param  mixed $quantity Quantity of a product added to an order.
     * @return bool
     */
    public function has_enough_stock($quantity)
    {
        // stub
    }

    /**
     * Returns whether or not the product has any visible attributes.
     *
     * @return boolean
     */
    public function has_attributes()
    {
        // stub
    }

    /**
     * Returns whether or not the product has any child product.
     *
     * @return bool
     */
    public function has_child()
    {
        // stub
    }

    /**
     * Does a child have dimensions?
     *
     * @since  3.0.0
     * @return bool
     */
    public function child_has_dimensions()
    {
        // stub
    }

    /**
     * Does a child have a weight?
     *
     * @since  3.0.0
     * @return boolean
     */
    public function child_has_weight()
    {
        // stub
    }

    /**
     * Check if downloadable product has a file attached.
     *
     * @since 1.6.2
     *
     * @param  string $download_id file identifier.
     * @return bool Whether downloadable product has a file attached.
     */
    public function has_file($download_id = '')
    {
        // stub
    }

    /**
     * Returns whether or not the product has additional options that need
     * selecting before adding to cart.
     *
     * @since  3.0.0
     * @return boolean
     */
    public function has_options()
    {
        // stub
    }

    /**
     * Get the product's title. For products this is the product name.
     *
     * @return string
     */
    public function get_title()
    {
        // stub
    }

    /**
     * Product permalink.
     *
     * @return string
     */
    public function get_permalink()
    {
        // stub
    }

    /**
     * Returns the children IDs if applicable. Overridden by child classes.
     *
     * @return array of IDs
     */
    public function get_children()
    {
        // stub
    }

    /**
     * If the stock level comes from another product ID, this should be modified.
     *
     * @since  3.0.0
     * @return int
     */
    public function get_stock_managed_by_id()
    {
        // stub
    }

    /**
     * Returns the price in html format.
     *
     * @param string $deprecated Deprecated param.
     *
     * @return string
     */
    public function get_price_html($deprecated = '')
    {
        // stub
    }

    /**
     * Get product name with SKU or ID. Used within admin.
     *
     * @return string Formatted product name
     */
    public function get_formatted_name()
    {
        // stub
    }

    /**
     * Get min quantity which can be purchased at once.
     *
     * @since  3.0.0
     * @return int
     */
    public function get_min_purchase_quantity()
    {
        // stub
    }

    /**
     * Get max quantity which can be purchased at once.
     *
     * @since  3.0.0
     * @return int Quantity or -1 if unlimited.
     */
    public function get_max_purchase_quantity()
    {
        // stub
    }

    /**
     * Get the add to url used mainly in loops.
     *
     * @return string
     */
    public function add_to_cart_url()
    {
        // stub
    }

    /**
     * Get the add to cart button text for the single page.
     *
     * @return string
     */
    public function single_add_to_cart_text()
    {
        // stub
    }

    /**
     * Get the aria-describedby description for the add to cart button.
     *
     * @return string
     */
    public function add_to_cart_aria_describedby()
    {
        // stub
    }

    /**
     * Get the add to cart button text.
     *
     * @return string
     */
    public function add_to_cart_text()
    {
        // stub
    }

    /**
     * Get the add to cart button text description - used in aria tags.
     *
     * @since  3.3.0
     * @return string
     */
    public function add_to_cart_description()
    {
        // stub
    }

    /**
     * Returns the main product image.
     *
     * @param  string $size (default: 'woocommerce_thumbnail').
     * @param  array  $attr Image attributes.
     * @param  bool   $placeholder True to return $placeholder if no image is found, or false to return an empty string.
     * @return string
     */
    public function get_image($size = 'woocommerce_thumbnail', $attr = array (
), $placeholder = true)
    {
        // stub
    }

    /**
     * Returns the product shipping class SLUG.
     *
     * @return string
     */
    public function get_shipping_class()
    {
        // stub
    }

    /**
     * Returns a single product attribute as a string.
     *
     * @param  string $attribute to get.
     * @return string
     */
    public function get_attribute($attribute)
    {
        // stub
    }

    /**
     * Get the total amount (COUNT) of ratings, or just the count for one rating e.g. number of 5 star ratings.
     *
     * @param  int $value Optional. Rating value to get the count for. By default returns the count of all rating values.
     * @return int
     */
    public function get_rating_count($value = null)
    {
        // stub
    }

    /**
     * Get a file by $download_id.
     *
     * @param  string $download_id file identifier.
     * @return array|false if not found
     */
    public function get_file($download_id = '')
    {
        // stub
    }

    /**
     * Get file download path identified by $download_id.
     *
     * @param  string $download_id file identifier.
     * @return string
     */
    public function get_file_download_path($download_id)
    {
        // stub
    }

    /**
     * Get the suffix to display after prices > 0.
     *
     * @param  string  $price to calculate, left blank to just use get_price().
     * @param  integer $qty   passed on to get_price_including_tax() or get_price_excluding_tax().
     * @return string
     */
    public function get_price_suffix($price = '', $qty = 1)
    {
        // stub
    }

    /**
     * Returns the availability of the product.
     *
     * @return string[]
     */
    public function get_availability()
    {
        // stub
    }

    /**
     * Get availability text based on stock status.
     *
     * @return string
     */
    protected function get_availability_text()
    {
        // stub
    }

    /**
     * Get availability classname based on stock status.
     *
     * @return string
     */
    protected function get_availability_class()
    {
        // stub
    }

    /**
     * Set the defined value of the Cost of Goods Sold for this product.
     *
     * In this implementation the defined value is a monetary value, but in the future
     * (or in derived classes) it could be something different like e.g. a percent of the price;
     * see also get_cogs_effective_value and get_cogs_total_value.
     *
     * The defined value can be null. By default this is equivalent to a value of zero,
     * but again: in the future, or in derived classes, it can mean something different.
     * See also adjust_cogs_value_before_set.
     *
     * WARNING! If the Cost of Goods Sold feature is disabled this method will have no effect.
     *
     * @param float|null $value The value to set for this product.
     */
    public function set_cogs_value(float|null $value): void
    {
        // stub
    }

    /**
     * Adjust the value of the Cost of Goods Sold before actually setting it.
     *
     * To disable the conversion of zero into null in a derived class,
     * override this method with just "return $value;" in the body.
     *
     * @param float|null $value Cost value passed to the set_cogs_value method.
     * @return float|null The actual value that will be set for the cost property.
     */
    protected function adjust_cogs_value_before_set(float|null $value): float|null
    {
        // stub
    }

    /**
     * Get the defined value of the Cost of Goods Sold for this product.
     * See set_cogs_value.
     *
     * WARNING! If the Cost of Goods Sold feature is disabled this method will always return null.
     *
     * @return float The current value for this product.
     */
    public function get_cogs_value(): float|null
    {
        // stub
    }

    /**
     * Get the effective value of the Cost of Goods Sold for this product.
     *
     * The effective value is the defined value once converted to a monetary value;
     * in the current implementation both values are always equal, but this could change
     * in the future (or in derived classes). See also get_cogs_effective_value_core
     * and get_cogs_total_value.
     *
     * WARNING! If the Cost of Goods Sold feature is disabled this method will always return zero.
     *
     * @return float The effective value for this product.
     */
    public function get_cogs_effective_value(): float
    {
        // stub
    }

    /**
     * Core method to get the effective value of the Cost of Goods Sold for this product.
     * (the final, actual monetary value).
     *
     * Derived classes can override this method to provide an alternative way
     * of calculating the effective value from the defined value,
     * see for example the WC_Product_Variation class.
     *
     * @return float The effective value for this product.
     */
    protected function get_cogs_effective_value_core(): float
    {
        // stub
    }

    /**
     * Get the effective total value of the Cost of Goods Sold for this product.
     * This is the monetary value that will be applied to orders and used for analytics purposes,
     * see also get_cogs_total_value_core.
     *
     * WARNING! If the Cost of Goods Sold feature is disabled this method will always return zero.
     *
     * @return float The effective total value for this product.
     */
    public function get_cogs_total_value(): float
    {
        // stub
    }

    /**
     * Core function to get the effective total value of the Cost of Goods Sold for this product.
     *
     * Derived classes can override this method to provide an alternative way
     * of calculating the total effective value from the single effective value
     * and/or the defined value.
     *
     * @return float The effective total value for this product.
     */
    protected function get_cogs_total_value_core(): float
    {
        // stub
    }

}
