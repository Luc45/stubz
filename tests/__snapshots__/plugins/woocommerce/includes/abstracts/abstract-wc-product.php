<?php
/**
 * Abstract Product Class
 *
 * The WooCommerce product class handles individual product data.
 *
 * @version 3.0.0
 * @package WooCommerce\Abstracts
 */
class WC_Product extends \WC_Abstract_Legacy_Product
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
  array(),
  'cross_sell_ids' => 
  array(),
  'parent_id' => 0,
  'reviews_allowed' => true,
  'purchase_note' => '',
  'attributes' => 
  array(),
  'default_attributes' => 
  array(),
  'menu_order' => 0,
  'post_password' => '',
  'virtual' => false,
  'downloadable' => false,
  'category_ids' => 
  array(),
  'tag_ids' => 
  array(),
  'shipping_class_id' => 0,
  'downloads' => 
  array(),
  'image_id' => '',
  'gallery_image_ids' => 
  array(),
  'download_limit' => -1,
  'download_expiry' => -1,
  'rating_counts' => 
  array(),
  'average_rating' => 0,
  'review_count' => 0,
  'cogs_value' => null,
);
    /**
     * Supported features such as 'ajax_add_to_cart'.
     *
     * @var array
     */
    protected $supports = array();
    /**
     * Get the product if ID is passed, otherwise the product is new and empty.
     * This class should NOT be instantiated, but the wc_get_product() function
     * should be used. It is possible, but the wc_get_product() is preferred.
     *
     * @param int|WC_Product|object $product Product to init.
     */
    public function __construct($product = 0)
{
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
}
    /**
     * Get SKU (Stock-keeping unit).
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_sku($context = 'view')
{
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
}
    /**
     * Returns the product's active price.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string price
     */
    public function get_price($context = 'view')
{
}
    /**
     * Returns the product's regular price.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string price
     */
    public function get_regular_price($context = 'view')
{
}
    /**
     * Returns the product's sale price.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string price
     */
    public function get_sale_price($context = 'view')
{
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
}
    /**
     * Returns the tax status.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_tax_status($context = 'view')
{
}
    /**
     * Returns the tax class.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_tax_class($context = 'view')
{
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
}
    /**
     * Returns number of items available for sale.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int|null
     */
    public function get_stock_quantity($context = 'view')
{
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
}
    /**
     * Returns the product's weight.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_weight($context = 'view')
{
}
    /**
     * Returns the product length.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_length($context = 'view')
{
}
    /**
     * Returns the product width.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_width($context = 'view')
{
}
    /**
     * Returns the product height.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_height($context = 'view')
{
}
    /**
     * Returns formatted dimensions.
     *
     * @param  bool $formatted True by default for legacy support - will be false/not set in future versions to return the array only. Use wc_format_dimensions for formatted versions instead.
     * @return string|array
     */
    public function get_dimensions($formatted = true)
{
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
}
    /**
     * Returns product attributes.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_attributes($context = 'view')
{
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
}
    /**
     * Returns the gallery attachment ids.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_gallery_image_ids($context = 'view')
{
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
}
    /**
     * Get rating count.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array of counts
     */
    public function get_rating_counts($context = 'view')
{
}
    /**
     * Get average rating.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return float
     */
    public function get_average_rating($context = 'view')
{
}
    /**
     * Get review count.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_review_count($context = 'view')
{
}
    /**
     * Set product name.
     *
     * @since 3.0.0
     * @param string $name Product name.
     */
    public function set_name($name)
{
}
    /**
     * Set product slug.
     *
     * @since 3.0.0
     * @param string $slug Product slug.
     */
    public function set_slug($slug)
{
}
    /**
     * Set product created date.
     *
     * @since 3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_date_created($date = null)
{
}
    /**
     * Set product modified date.
     *
     * @since 3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_date_modified($date = null)
{
}
    /**
     * Set product status.
     *
     * @since 3.0.0
     * @param string $status Product status.
     */
    public function set_status($status)
{
}
    /**
     * Set if the product is featured.
     *
     * @since 3.0.0
     * @param bool|string $featured Whether the product is featured or not.
     */
    public function set_featured($featured)
{
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
}
    /**
     * Set product description.
     *
     * @since 3.0.0
     * @param string $description Product description.
     */
    public function set_description($description)
{
}
    /**
     * Set product short description.
     *
     * @since 3.0.0
     * @param string $short_description Product short description.
     */
    public function set_short_description($short_description)
{
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
}
    /**
     * Set global_unique_id
     *
     * @since 9.1.0
     * @param string $global_unique_id Unique ID.
     */
    public function set_global_unique_id($global_unique_id)
{
}
    /**
     * Set the product's active price.
     *
     * @param string $price Price.
     */
    public function set_price($price)
{
}
    /**
     * Set the product's regular price.
     *
     * @since 3.0.0
     * @param string $price Regular price.
     */
    public function set_regular_price($price)
{
}
    /**
     * Set the product's sale price.
     *
     * @since 3.0.0
     * @param string $price sale price.
     */
    public function set_sale_price($price)
{
}
    /**
     * Set date on sale from.
     *
     * @since 3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_date_on_sale_from($date = null)
{
}
    /**
     * Set date on sale to.
     *
     * @since 3.0.0
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     */
    public function set_date_on_sale_to($date = null)
{
}
    /**
     * Set number total of sales.
     *
     * @since 3.0.0
     * @param int $total Total of sales.
     */
    public function set_total_sales($total)
{
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
}
    /**
     * Set the tax class.
     *
     * @since 3.0.0
     * @param string $class Tax class.
     */
    public function set_tax_class($class)
{
}
    /**
     * Return an array of valid tax classes
     *
     * @return array valid tax classes
     */
    protected function get_valid_tax_classes()
{
}
    /**
     * Set if product manage stock.
     *
     * @since 3.0.0
     * @param bool $manage_stock Whether or not manage stock is enabled.
     */
    public function set_manage_stock($manage_stock)
{
}
    /**
     * Set number of items available for sale.
     *
     * @since 3.0.0
     * @param float|null $quantity Stock quantity.
     */
    public function set_stock_quantity($quantity)
{
}
    /**
     * Set stock status.
     *
     * @param string $status New status.
     */
    public function set_stock_status($status = 'instock')
{
}
    /**
     * Set backorders.
     *
     * @since 3.0.0
     * @param string $backorders Options: 'yes', 'no' or 'notify'.
     */
    public function set_backorders($backorders)
{
}
    /**
     * Set low stock amount.
     *
     * @param int|string $amount Empty string if value not set.
     * @since 3.5.0
     */
    public function set_low_stock_amount($amount)
{
}
    /**
     * Set if should be sold individually.
     *
     * @since 3.0.0
     * @param bool $sold_individually Whether or not product is sold individually.
     */
    public function set_sold_individually($sold_individually)
{
}
    /**
     * Set the product's weight.
     *
     * @since 3.0.0
     * @param float|string $weight Total weight.
     */
    public function set_weight($weight)
{
}
    /**
     * Set the product length.
     *
     * @since 3.0.0
     * @param float|string $length Total length.
     */
    public function set_length($length)
{
}
    /**
     * Set the product width.
     *
     * @since 3.0.0
     * @param float|string $width Total width.
     */
    public function set_width($width)
{
}
    /**
     * Set the product height.
     *
     * @since 3.0.0
     * @param float|string $height Total height.
     */
    public function set_height($height)
{
}
    /**
     * Set upsell IDs.
     *
     * @since 3.0.0
     * @param array $upsell_ids IDs from the up-sell products.
     */
    public function set_upsell_ids($upsell_ids)
{
}
    /**
     * Set crosssell IDs.
     *
     * @since 3.0.0
     * @param array $cross_sell_ids IDs from the cross-sell products.
     */
    public function set_cross_sell_ids($cross_sell_ids)
{
}
    /**
     * Set parent ID.
     *
     * @since 3.0.0
     * @param int $parent_id Product parent ID.
     */
    public function set_parent_id($parent_id)
{
}
    /**
     * Set if reviews is allowed.
     *
     * @since 3.0.0
     * @param bool $reviews_allowed Reviews allowed or not.
     */
    public function set_reviews_allowed($reviews_allowed)
{
}
    /**
     * Set purchase note.
     *
     * @since 3.0.0
     * @param string $purchase_note Purchase note.
     */
    public function set_purchase_note($purchase_note)
{
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
}
    /**
     * Set default attributes. These will be saved as strings and should map to attribute values.
     *
     * @since 3.0.0
     * @param array $default_attributes List of default attributes.
     */
    public function set_default_attributes($default_attributes)
{
}
    /**
     * Set menu order.
     *
     * @since 3.0.0
     * @param int $menu_order Menu order.
     */
    public function set_menu_order($menu_order)
{
}
    /**
     * Set post password.
     *
     * @since 3.6.0
     * @param int $post_password Post password.
     */
    public function set_post_password($post_password)
{
}
    /**
     * Set the product categories.
     *
     * @since 3.0.0
     * @param array $term_ids List of terms IDs.
     */
    public function set_category_ids($term_ids)
{
}
    /**
     * Set the product tags.
     *
     * @since 3.0.0
     * @param array $term_ids List of terms IDs.
     */
    public function set_tag_ids($term_ids)
{
}
    /**
     * Set if the product is virtual.
     *
     * @since 3.0.0
     * @param bool|string $virtual Whether product is virtual or not.
     */
    public function set_virtual($virtual)
{
}
    /**
     * Set shipping class ID.
     *
     * @since 3.0.0
     * @param int $id Product shipping class id.
     */
    public function set_shipping_class_id($id)
{
}
    /**
     * Set if the product is downloadable.
     *
     * @since 3.0.0
     * @param bool|string $downloadable Whether product is downloadable or not.
     */
    public function set_downloadable($downloadable)
{
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
}
    /**
     * Set download limit.
     *
     * @since 3.0.0
     * @param int|string $download_limit Product download limit.
     */
    public function set_download_limit($download_limit)
{
}
    /**
     * Set download expiry.
     *
     * @since 3.0.0
     * @param int|string $download_expiry Product download expiry.
     */
    public function set_download_expiry($download_expiry)
{
}
    /**
     * Set gallery attachment ids.
     *
     * @since 3.0.0
     * @param array $image_ids List of image ids.
     */
    public function set_gallery_image_ids($image_ids)
{
}
    /**
     * Set main image ID.
     *
     * @since 3.0.0
     * @param int|string $image_id Product image id.
     */
    public function set_image_id($image_id = '')
{
}
    /**
     * Set rating counts. Read only.
     *
     * @param array $counts Product rating counts.
     */
    public function set_rating_counts($counts)
{
}
    /**
     * Set average rating. Read only.
     *
     * @param float $average Product average rating.
     */
    public function set_average_rating($average)
{
}
    /**
     * Set review count. Read only.
     *
     * @param int $count Product review count.
     */
    public function set_review_count($count)
{
}
    /**
     * Ensure properties are set correctly before save.
     *
     * @since 3.0.0
     */
    public function validate_props()
{
}
    /**
     * Save data (either create or update depending on if we are working on an existing product).
     *
     * @since  3.0.0
     * @return int
     */
    public function save()
{
}
    /**
     * Do any extra processing needed before the actual product save
     * (but after triggering the 'woocommerce_before_..._object_save' action)
     *
     * @return mixed A state value that will be passed to after_data_store_save_or_update.
     */
    protected function before_data_store_save_or_update()
{
}
    /**
     * Do any extra processing needed after the actual product save
     * (but before triggering the 'woocommerce_after_..._object_save' action)
     *
     * @param mixed $state The state object that was returned by before_data_store_save_or_update.
     */
    protected function after_data_store_save_or_update($state)
{
}
    /**
     * Delete the product, set its ID to 0, and return result.
     *
     * @param  bool $force_delete Should the product be deleted permanently.
     * @return bool result
     */
    public function delete($force_delete = false)
{
}
    /**
     * If this is a child product, queue its parent for syncing at the end of the request.
     */
    protected function maybe_defer_product_sync()
{
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
}
    /**
     * Returns whether or not the product post exists.
     *
     * @return bool
     */
    public function exists()
{
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
}
    /**
     * Checks if a product is downloadable.
     *
     * @return bool
     */
    public function is_downloadable()
{
}
    /**
     * Checks if a product is virtual (has no shipping).
     *
     * @return bool
     */
    public function is_virtual()
{
}
    /**
     * Returns whether or not the product is featured.
     *
     * @return bool
     */
    public function is_featured()
{
}
    /**
     * Check if a product is sold individually (no quantities).
     *
     * @return bool
     */
    public function is_sold_individually()
{
}
    /**
     * Returns whether or not the product is visible in the catalog.
     *
     * @return bool
     */
    public function is_visible()
{
}
    /**
     * Returns whether or not the product is visible in the catalog (doesn't trigger filters).
     *
     * @return bool
     */
    protected function is_visible_core()
{
}
    /**
     * Returns false if the product cannot be bought.
     *
     * @return bool
     */
    public function is_purchasable()
{
}
    /**
     * Returns whether or not the product is on sale.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return bool
     */
    public function is_on_sale($context = 'view')
{
}
    /**
     * Returns whether or not the product has dimensions set.
     *
     * @return bool
     */
    public function has_dimensions()
{
}
    /**
     * Returns whether or not the product has weight set.
     *
     * @return bool
     */
    public function has_weight()
{
}
    /**
     * Returns whether or not the product can be purchased.
     * This returns true for 'instock' and 'onbackorder' stock statuses.
     *
     * @return bool
     */
    public function is_in_stock()
{
}
    /**
     * Checks if a product needs shipping.
     *
     * @return bool
     */
    public function needs_shipping()
{
}
    /**
     * Returns whether or not the product is taxable.
     *
     * @return bool
     */
    public function is_taxable()
{
}
    /**
     * Returns whether or not the product shipping is taxable.
     *
     * @return bool
     */
    public function is_shipping_taxable()
{
}
    /**
     * Returns whether or not the product is stock managed.
     *
     * @return bool
     */
    public function managing_stock()
{
}
    /**
     * Returns whether or not the product can be backordered.
     *
     * @return bool
     */
    public function backorders_allowed()
{
}
    /**
     * Returns whether or not the product needs to notify the customer on backorder.
     *
     * @return bool
     */
    public function backorders_require_notification()
{
}
    /**
     * Check if a product is on backorder.
     *
     * @param  int $qty_in_cart (default: 0).
     * @return bool
     */
    public function is_on_backorder($qty_in_cart = 0)
{
}
    /**
     * Returns whether or not the product has enough stock for the order.
     *
     * @param  mixed $quantity Quantity of a product added to an order.
     * @return bool
     */
    public function has_enough_stock($quantity)
{
}
    /**
     * Returns whether or not the product has any visible attributes.
     *
     * @return boolean
     */
    public function has_attributes()
{
}
    /**
     * Returns whether or not the product has any child product.
     *
     * @return bool
     */
    public function has_child()
{
}
    /**
     * Does a child have dimensions?
     *
     * @since  3.0.0
     * @return bool
     */
    public function child_has_dimensions()
{
}
    /**
     * Does a child have a weight?
     *
     * @since  3.0.0
     * @return boolean
     */
    public function child_has_weight()
{
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
}
    /**
     * Get the product's title. For products this is the product name.
     *
     * @return string
     */
    public function get_title()
{
}
    /**
     * Product permalink.
     *
     * @return string
     */
    public function get_permalink()
{
}
    /**
     * Returns the children IDs if applicable. Overridden by child classes.
     *
     * @return array of IDs
     */
    public function get_children()
{
}
    /**
     * If the stock level comes from another product ID, this should be modified.
     *
     * @since  3.0.0
     * @return int
     */
    public function get_stock_managed_by_id()
{
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
}
    /**
     * Get product name with SKU or ID. Used within admin.
     *
     * @return string Formatted product name
     */
    public function get_formatted_name()
{
}
    /**
     * Get min quantity which can be purchased at once.
     *
     * @since  3.0.0
     * @return int
     */
    public function get_min_purchase_quantity()
{
}
    /**
     * Get max quantity which can be purchased at once.
     *
     * @since  3.0.0
     * @return int Quantity or -1 if unlimited.
     */
    public function get_max_purchase_quantity()
{
}
    /**
     * Get the add to url used mainly in loops.
     *
     * @return string
     */
    public function add_to_cart_url()
{
}
    /**
     * Get the add to cart button text for the single page.
     *
     * @return string
     */
    public function single_add_to_cart_text()
{
}
    /**
     * Get the aria-describedby description for the add to cart button.
     *
     * @return string
     */
    public function add_to_cart_aria_describedby()
{
}
    /**
     * Get the add to cart button text.
     *
     * @return string
     */
    public function add_to_cart_text()
{
}
    /**
     * Get the add to cart button text description - used in aria tags.
     *
     * @since  3.3.0
     * @return string
     */
    public function add_to_cart_description()
{
}
    /**
     * Returns the main product image.
     *
     * @param  string $size (default: 'woocommerce_thumbnail').
     * @param  array  $attr Image attributes.
     * @param  bool   $placeholder True to return $placeholder if no image is found, or false to return an empty string.
     * @return string
     */
    public function get_image($size = 'woocommerce_thumbnail', $attr = array(), $placeholder = true)
{
}
    /**
     * Returns the product shipping class SLUG.
     *
     * @return string
     */
    public function get_shipping_class()
{
}
    /**
     * Returns a single product attribute as a string.
     *
     * @param  string $attribute to get.
     * @return string
     */
    public function get_attribute($attribute)
{
}
    /**
     * Get the total amount (COUNT) of ratings, or just the count for one rating e.g. number of 5 star ratings.
     *
     * @param  int $value Optional. Rating value to get the count for. By default returns the count of all rating values.
     * @return int
     */
    public function get_rating_count($value = null)
{
}
    /**
     * Get a file by $download_id.
     *
     * @param  string $download_id file identifier.
     * @return array|false if not found
     */
    public function get_file($download_id = '')
{
}
    /**
     * Get file download path identified by $download_id.
     *
     * @param  string $download_id file identifier.
     * @return string
     */
    public function get_file_download_path($download_id)
{
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
}
    /**
     * Returns the availability of the product.
     *
     * @return string[]
     */
    public function get_availability()
{
}
    /**
     * Get availability text based on stock status.
     *
     * @return string
     */
    protected function get_availability_text()
{
}
    /**
     * Get availability classname based on stock status.
     *
     * @return string
     */
    protected function get_availability_class()
{
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
}
}
