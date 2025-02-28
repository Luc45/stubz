<?php

/**
 * WC_Meta_Box_Product_Data Class.
 */
class WC_Meta_Box_Product_Data
{
    /**
     * Output the metabox.
     *
     * @param WP_Post $post Post object.
     */
    public static function output($post)
{
}
    /**
     * Show tab content/settings.
     */
    private static function output_tabs()
{
}
    /**
     * Return array of product type options.
     *
     * @return array
     */
    private static function get_product_type_options()
{
}
    /**
     * Return array of tabs to show.
     *
     * @return array
     */
    private static function get_product_data_tabs()
{
}
    /**
     * Callback to sort product data tabs on priority.
     *
     * @since 3.1.0
     * @param int $a First item.
     * @param int $b Second item.
     *
     * @return bool
     */
    private static function product_data_tabs_sort($a, $b)
{
}
    /**
     * Filter callback for finding variation attributes.
     *
     * @param  WC_Product_Attribute $attribute Product attribute.
     * @return bool
     */
    private static function filter_variation_attributes($attribute)
{
}
    /**
     * Filter callback for finding non-variation attributes.
     *
     * @param  WC_Product_Attribute $attribute Product attribute.
     * @return bool
     */
    private static function filter_non_variation_attributes($attribute)
{
}
    /**
     * Show options for the variable product type.
     */
    public static function output_variations()
{
}
    /**
     * Prepare downloads for save.
     *
     * @param array $file_names File names.
     * @param array $file_urls File urls.
     * @param array $file_hashes File hashes.
     *
     * @return array
     */
    private static function prepare_downloads($file_names, $file_urls, $file_hashes)
{
}
    /**
     * Prepare children for save.
     *
     * @return array
     */
    private static function prepare_children()
{
}
    /**
     * Prepare attributes for save.
     *
     * @param array $data Attribute data.
     *
     * @return array
     */
    public static function prepare_attributes($data = false)
{
}
    /**
     * Prepare attributes for a specific variation or defaults.
     *
     * @param  array  $all_attributes List of attribute keys.
     * @param  string $key_prefix Attribute key prefix.
     * @param  int    $index Attribute array index.
     * @return array
     */
    private static function prepare_set_attributes($all_attributes, $key_prefix = 'attribute_', $index = null)
{
}
    /**
     * Save meta box data.
     *
     * @param int     $post_id WP post id.
     * @param WP_Post $post Post object.
     */
    public static function save($post_id, $post)
{
}
    /**
     * Save variation meta box data.
     *
     * @param int     $post_id WP post id.
     * @param WP_Post $post Post object.
     */
    public static function save_variations($post_id, $post)
{
}
}
