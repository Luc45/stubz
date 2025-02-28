<?php
/**
 * Product grouped class.
 */
class WC_Product_Grouped extends \WC_Product
{
    /**
     * Stores product data.
     *
     * @var array
     */
    protected $extra_data = array (
  'children' => 
  array(),
);
    /**
     * Get internal type.
     *
     * @return string
     */
    public function get_type()
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
     * @since 3.3.0
     * @return string
     */
    public function add_to_cart_description()
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
     * Returns false if the product cannot be bought.
     *
     * @return bool
     */
    public function is_purchasable()
{
}
    /**
     * Returns the price in html format.
     *
     * @param string $price (default: '').
     * @return string
     */
    public function get_price_html($price = '')
{
}
    /**
     * Return the children of this product.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_children($context = 'view')
{
}
    /**
     * Return the children of this product.
     *
     * @param array $children List of product children.
     */
    public function set_children($children)
{
}
    /**
     * Sync a grouped product with it's children. These sync functions sync
     * upwards (from child to parent) when the variation is saved.
     *
     * @param WC_Product|int $product Product object or ID for which you wish to sync.
     * @param bool           $save If true, the product object will be saved to the DB before returning it.
     * @return WC_Product Synced product object.
     */
    public static function sync($product, $save = true)
{
}
}
