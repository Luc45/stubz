<?php

/**
 * Gets text attributes from a string.
 *
 * @since  2.4
 * @param string $raw_attributes Raw attributes.
 * @return array
 */
function wc_get_text_attributes($raw_attributes)
{
}
/**
 * See if an attribute is actually valid.
 *
 * @since  3.0.0
 * @param  string $value Value.
 * @return bool
 */
function wc_get_text_attributes_filter_callback($value)
{
}
/**
 * Implode an array of attributes using WC_DELIMITER.
 *
 * @since  3.0.0
 * @param  array $attributes Attributes list.
 * @return string
 */
function wc_implode_text_attributes($attributes)
{
}
/**
 * Get attribute taxonomies.
 *
 * @return array of objects, @since 3.6.0 these are also indexed by ID.
 */
function wc_get_attribute_taxonomies()
{
}
/**
 * Get (cached) attribute taxonomy ID and name pairs.
 *
 * @since 3.6.0
 * @return array
 */
function wc_get_attribute_taxonomy_ids()
{
}
/**
 * Get (cached) attribute taxonomy label and name pairs.
 *
 * @since 3.6.0
 * @return array
 */
function wc_get_attribute_taxonomy_labels()
{
}
/**
 * Get a product attribute name.
 *
 * @param string $attribute_name Attribute name.
 * @return string
 */
function wc_attribute_taxonomy_name($attribute_name)
{
}
/**
 * Get the attribute name used when storing values in post meta.
 *
 * @since 2.6.0
 * @param string $attribute_name Attribute name.
 * @return string
 */
function wc_variation_attribute_name($attribute_name)
{
}
/**
 * Get a product attribute name by ID.
 *
 * @since  2.4.0
 * @param int $attribute_id Attribute ID.
 * @return string Return an empty string if attribute doesn't exist.
 */
function wc_attribute_taxonomy_name_by_id($attribute_id)
{
}
/**
 * Get a product attribute ID by name.
 *
 * @since  2.6.0
 * @param string $name Attribute name.
 * @return int
 */
function wc_attribute_taxonomy_id_by_name($name)
{
}
/**
 * Get a product attributes label.
 *
 * @param string     $name    Attribute name.
 * @param WC_Product $product Product data.
 * @return string
 */
function wc_attribute_label($name, $product = '')
{
}
/**
 * Get a product attributes orderby setting.
 *
 * @param string $name Attribute name.
 * @return string
 */
function wc_attribute_orderby($name)
{
}
/**
 * Get an array of product attribute taxonomies.
 *
 * @return array
 */
function wc_get_attribute_taxonomy_names()
{
}
/**
 * Get attribute types.
 *
 * @since  2.4.0
 * @return array
 */
function wc_get_attribute_types()
{
}
/**
 * Check if there are custom attribute types.
 *
 * @since  3.3.2
 * @return bool True if there are custom types, otherwise false.
 */
function wc_has_custom_attribute_types()
{
}
/**
 * Get attribute type label.
 *
 * @since  3.0.0
 * @param  string $type Attribute type slug.
 * @return string
 */
function wc_get_attribute_type_label($type)
{
}
/**
 * Check if attribute name is reserved.
 * https://codex.wordpress.org/Function_Reference/register_taxonomy#Reserved_Terms.
 *
 * @since  2.4.0
 * @param  string $attribute_name Attribute name.
 * @return bool
 */
function wc_check_if_attribute_name_is_reserved($attribute_name)
{
}
/**
 * Callback for array filter to get visible only.
 *
 * @since  3.0.0
 * @param  WC_Product_Attribute $attribute Attribute data.
 * @return bool
 */
function wc_attributes_array_filter_visible($attribute)
{
}
/**
 * Callback for array filter to get variation attributes only.
 *
 * @since  3.0.0
 * @param  WC_Product_Attribute $attribute Attribute data.
 * @return bool
 */
function wc_attributes_array_filter_variation($attribute)
{
}
/**
 * Check if an attribute is included in the attributes area of a variation name.
 *
 * @since  3.0.2
 * @param  string $attribute Attribute value to check for.
 * @param  string $name      Product name to check in.
 * @return bool
 */
function wc_is_attribute_in_product_name($attribute, $name)
{
}
/**
 * Callback for array filter to get default attributes.  Will allow for '0' string values, but regard all other
 * class PHP FALSE equivalents normally.
 *
 * @since 3.1.0
 * @param mixed $attribute Attribute being considered for exclusion from parent array.
 * @return bool
 */
function wc_array_filter_default_attributes($attribute)
{
}
/**
 * Get attribute data by ID.
 *
 * @since  3.2.0
 * @param  int $id Attribute ID.
 * @return stdClass|null
 */
function wc_get_attribute($id)
{
}
/**
 * Create attribute.
 *
 * @since  3.2.0
 * @param  array $args Attribute arguments {
 *     Array of attribute parameters.
 *
 *     @type int    $id           Unique identifier, used to update an attribute.
 *     @type string $name         Attribute name. Always required.
 *     @type string $slug         Attribute alphanumeric identifier.
 *     @type string $type         Type of attribute.
 *                                Core by default accepts: 'select' and 'text'.
 *                                Default to 'select'.
 *     @type string $order_by     Sort order.
 *                                Accepts: 'menu_order', 'name', 'name_num' and 'id'.
 *                                Default to 'menu_order'.
 *     @type bool   $has_archives Enable or disable attribute archives. False by default.
 * }
 * @return int|WP_Error
 */
function wc_create_attribute($args)
{
}
/**
 * Update an attribute.
 *
 * For available args see wc_create_attribute().
 *
 * @since  3.2.0
 * @param  int   $id   Attribute ID.
 * @param  array $args Attribute arguments.
 * @return int|WP_Error
 */
function wc_update_attribute($id, $args)
{
}
/**
 * Delete attribute by ID.
 *
 * @since  3.2.0
 * @param  int $id Attribute ID.
 * @return bool
 */
function wc_delete_attribute($id)
{
}
/**
 * Get an unprefixed product attribute name.
 *
 * @since 3.6.0
 *
 * @param  string $attribute_name Attribute name.
 * @return string
 */
function wc_attribute_taxonomy_slug($attribute_name)
{
}