<?php

/**
 * Product variation class.
 */
class WC_Product_Variation
{
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'product_variation';

    /**
     * Parent data.
     *
     * @var array
     */
    protected $parent_data = array (
  'title' => '',
  'sku' => '',
  'manage_stock' => '',
  'backorders' => '',
  'stock_quantity' => '',
  'weight' => '',
  'length' => '',
  'width' => '',
  'height' => '',
  'tax_class' => '',
  'shipping_class_id' => '',
  'image_id' => '',
  'purchase_note' => '',
);

    /**
     * Override the default constructor to set custom defaults.
     *
     * @param int|WC_Product|object $product Product to init.
     */
    public function __construct($product = 0)
{
}
    /**
     * Prefix for action and filter hooks on data.
     *
     * @since  3.0.0
     * @return string
     */
    protected function get_hook_prefix()
{
}
    /**
     * Get internal type.
     *
     * @return string
     */
    public function get_type()
{
}
    /**
     * If the stock level comes from another product ID.
     *
     * @since  3.0.0
     * @return int
     */
    public function get_stock_managed_by_id()
{
}
    /**
     * Get the product's title. For variations this is the parent product name.
     *
     * @return string
     */
    public function get_title()
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
     * Get variation attribute values. Keys are prefixed with attribute_, as stored, unless $with_prefix is false.
     *
     * @param bool $with_prefix Whether keys should be prepended with attribute_ or not, default is true.
     * @return array of attributes and their values for this variation.
     */
    public function get_variation_attributes($with_prefix = true)
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
     * Wrapper for get_permalink. Adds this variations attributes to the URL.
     *
     * @param  array|null $item_object item array If a cart or order item is passed, we can get a link containing the exact attributes selected for the variation, rather than the default attributes.
     * @return string
     */
    public function get_permalink($item_object = null)
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
     * Get SKU (Stock-keeping unit) - product unique ID.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_sku($context = 'view')
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
     * Returns the tax class.
     *
     * Does not use get_prop so it can handle 'parent' inheritance correctly.
     *
     * @param  string $context view, edit, or unfiltered.
     * @return string
     */
    public function get_tax_class($context = 'view')
{
}
    /**
     * Return if product manage stock.
     *
     * @since 3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return boolean|string true, false, or parent.
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
     * Get backorders.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @since 3.0.0
     * @return string yes no or notify
     */
    public function get_backorders($context = 'view')
{
}
    /**
     * Get main image ID.
     *
     * @since 3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_image_id($context = 'view')
{
}
    /**
     * Get purchase note.
     *
     * @since 3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_purchase_note($context = 'view')
{
}
    /**
     * Get shipping class ID.
     *
     * @since 3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_shipping_class_id($context = 'view')
{
}
    /**
     * Get catalog visibility.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_catalog_visibility($context = 'view')
{
}
    /**
     * Get attribute summary.
     *
     * By default, attribute summary contains comma-delimited 'attribute_name: attribute_value' pairs for all attributes.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     *
     * @since 3.6.0
     * @return string
     */
    public function get_attribute_summary($context = 'view')
{
}
    /**
     * Set attribute summary.
     *
     * By default, attribute summary contains comma-delimited 'attribute_name: attribute_value' pairs for all attributes.
     *
     * @since 3.6.0
     * @param string $attribute_summary Summary of attribute names and values assigned to the variation.
     */
    public function set_attribute_summary($attribute_summary)
{
}
    /**
     * Set the parent data array for this variation.
     *
     * @since 3.0.0
     * @param array $parent_data parent data array for this variation.
     */
    public function set_parent_data($parent_data)
{
}
    /**
     * Get the parent data array for this variation.
     *
     * @since  3.0.0
     * @return array
     */
    public function get_parent_data()
{
}
    /**
     * Set attributes. Unlike the parent product which uses terms, variations are assigned
     * specific attributes using name value pairs.
     *
     * @param array $raw_attributes array of raw attributes.
     */
    public function set_attributes($raw_attributes)
{
}
    /**
     * Returns whether or not the product has any visible attributes.
     *
     * Variations are mapped to specific attributes unlike products, and the return
     * value of ->get_attributes differs. Therefore this returns false.
     *
     * @return boolean
     */
    public function has_attributes()
{
}
    /**
     * Returns false if the product cannot be bought.
     * Override abstract method so that: i) Disabled variations are not be purchasable by admins. ii) Enabled variations are not purchasable if the parent product is not purchasable.
     *
     * @return bool
     */
    public function is_purchasable()
{
}
    /**
     * Controls whether this particular variation will appear greyed-out (inactive) or not (active).
     * Used by extensions to make incompatible variations appear greyed-out, etc.
     * Other possible uses: prevent out-of-stock variations from being selected.
     *
     * @return bool
     */
    public function variation_is_active()
{
}
    /**
     * Checks if this particular variation is visible. Invisible variations are enabled and can be selected, but no price / stock info is displayed.
     * Instead, a suitable 'unavailable' message is displayed.
     * Invisible by default: Disabled variations and variations with an empty price.
     *
     * @return bool
     */
    public function variation_is_visible()
{
}
    /**
     * Return valid tax classes. Adds 'parent' to the default list of valid tax classes.
     *
     * @return array valid tax classes
     */
    protected function get_valid_tax_classes()
{
}
    /**
     * Get the value of the "Cost of Goods Sold value is additive" flag for this product.
     * See get_cogs_effective_value_core.
     *
     * @return bool The current value of the flag.
     */
    public function get_cogs_value_is_additive(): bool
{
}
    /**
     * Set the value of the "Cost of Goods Sold value is additive" flag for this product.
     * See get_cogs_effective_value_core.
     *
     * WARNING! If the Cost of Goods Sold feature is disabled this value will NOT be persisted when the product is saved.
     *
     * @param bool $value The value to set for the flag.
     */
    public function set_cogs_value_is_additive(bool $value): void
{
}
    /**
     * Replacement of the parent adjust_cogs_value_before_set method
     * to disable the conversion of zero to null.
     *
     * @param float|null $value Cost value passed to the set_cogs_value method.
     * @return float|null The actual value that will be set for the cost property.
     */
    protected function adjust_cogs_value_before_set(float|null $value): float|null
{
}
    /**
     * Get the effective total value of the Cost of Goods Sold for this product.
     * (the monetary value that will be applied to orders and used for analytics purposes).
     *
     * If "additive" flag is set, the total value is equal to sum of the effective values of the variation and the parent product.
     * Otherwise, if the defined value for this variation is null, the effective value is equal to the effective value of the parent product.
     * Otherwise, the effective value is equal to the effective value of the variation.
     *
     * @return float
     */
    protected function get_cogs_total_value_core(): float
{
}
    /**
     * Get the Cost of Goods Sold effective value of the parent product.
     *
     * @return float Cost of Goods Sold effective value of the parent product.
     */
    public function get_parent_cogs_effective_value(): float
{
}
}
