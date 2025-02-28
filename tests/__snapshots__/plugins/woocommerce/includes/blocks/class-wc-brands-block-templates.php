<?php
/**
 * Utils for compatibility with WooCommerce Full Site Editor Blocks
 *
 * Important: For internal use only by the Automattic\WooCommerce\Internal\Brands package.
 *
 * @version 9.4.0
 */
class WC_Brands_Block_Templates
{
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Get the taxonomy-product_brand template from DB in case a user customized it in FSE
     *
     * @return WP_Post|null The taxonomy-product_brand
     */
    private function get_product_brand_template_db()
{
}
    /**
     * Fixes a bug regarding taxonomies and FSE.
     * Without this, the system will always load archive-product.php version instead of taxonomy_product_brand.html
     * it will show a deprecation error if that happens.
     *
     * Triggered by woocommerce_has_block_template filter
     *
     * @param bool   $has_template  True if the template is available.
     * @param string $template_name The name of the template.
     *
     * @return bool True if the system is checking archive-product
     */
    public function has_block_template($has_template, $template_name)
{
}
    /**
     * Get the block template for Taxonomy Product Brand. First it attempts to load the last version from DB
     * Otherwise it loads the file based template.
     *
     * @param string $template_type The post_type for the template. Normally wp_template or wp_template_part.
     *
     * @return WP_Block_Template The taxonomy-product_brand template.
     */
    private function get_product_brands_template($template_type)
{
}
    /**
     * Function to check if a template name is woocommerce/taxonomy-product_brand
     *
     * Notice depending on the version of WooCommerce this could be:
     *
     * woocommerce//taxonomy-product_brand
     * woocommerce/woocommerce//taxonomy-product_brand
     *
     * @param  String $id The string to check if contains the template name.
     *
     * @return bool True if the template is woocommerce/taxonomy-product_brand
     */
    private function is_taxonomy_product_brand_template($id)
{
}
    /**
     * Get the block template for Taxonomy Product Brand if requested.
     * Triggered by get_block_file_template action
     *
     * @param WP_Block_Template|null $block_template The current Block Template loaded, if any.
     * @param string                 $id The template id normally in the format theme-slug//template-slug.
     * @param string                 $template_type The post_type for the template. Normally wp_template or wp_template_part.
     *
     * @return WP_Block_Template|null The taxonomy-product_brand template.
     */
    public function get_block_file_template($block_template, $id, $template_type)
{
}
    /**
     * Add the Block template in the template query results needed by FSE
     * Triggered by get_block_templates action
     *
     * @param array  $query_result The list of templates to render in the query.
     * @param array  $query The current query parameters.
     * @param string $template_type The post_type for the template. Normally wp_template or wp_template_part.
     *
     * @return WP_Block_Template[] Array of the matched Block Templates to render.
     */
    public function get_block_templates($query_result, $query, $template_type)
{
}
}
