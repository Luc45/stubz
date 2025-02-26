<?php

namespace ;

/**
 * WC_Brands class.
 *
 * Important: For internal use only by the Automattic\WooCommerce\Internal\Brands package.
 *
 * @version 9.5.0
 */
class WC_Brands
{
    /**
     * Template URL -- filterable.
     *
     * @var mixed|null
     */
    public $template_url = null;

    /**
     * __construct function.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Register our hooks
     */
    public function register_hooks()
    {
        // stub
    }

    /**
     * Add product_brand to the taxonomies overridden for the original term count.
     *
     * @param array $taxonomies List of taxonomies.
     *
     * @return array
     */
    public function add_brands_to_terms($taxonomies)
    {
        // stub
    }

    /**
     * Recount the brands after the stock amount changes.
     *
     * @param int $product_id Product ID.
     */
    public function recount_after_stock_change($product_id)
    {
        // stub
    }

    /**
     * Recount all brands.
     */
    public function recount_all_brands()
    {
        // stub
    }

    /**
     * Update the main product fetch query to filter by selected brands.
     *
     * @param array $tax_query array of current taxonomy filters.
     *
     * @return array
     */
    public function update_product_query_tax_query(array $tax_query)
    {
        // stub
    }

    /**
     * Filter to allow product_brand in the permalinks for products.
     *
     * @param string  $permalink The existing permalink URL.
     * @param WP_Post $post The post.
     * @return string
     */
    public function post_type_link($permalink, $post)
    {
        // stub
    }

    /**
     * Adds filter for introducing CSS classes.
     */
    public function body_class()
    {
        // stub
    }

    /**
     * Adds classes to brand taxonomy pages.
     *
     * @param array $classes Classes array.
     */
    public function add_body_class($classes)
    {
        // stub
    }

    /**
     * Enqueues styles.
     */
    public function styles()
    {
        // stub
    }

    /**
     * Initializes brand taxonomy.
     */
    public static function init_taxonomy()
    {
        // stub
    }

    /**
     * Initializes brand widgets.
     */
    public function init_widgets()
    {
        // stub
    }

    /**
     *
     * Handles template usage so that we can use our own templates instead of the themes.
     *
     * Templates are in the 'templates' folder. woocommerce looks for theme
     * overides in /theme/woocommerce/ by default
     *
     * For beginners, it also looks for a woocommerce.php template first. If the user adds
     * this to the theme (containing a woocommerce() inside) this will be used for all
     * woocommerce templates.
     *
     * @param string $template Template.
     */
    public function template_loader($template)
    {
        // stub
    }

    /**
     * Displays brand description.
     */
    public function brand_description()
    {
        // stub
    }

    /**
     * Displays brand.
     */
    public function show_brand()
    {
        // stub
    }

    /**
     * Add structured data to product page.
     *
     * @param  array $markup Markup.
     * @return array $markup
     */
    public function add_structured_data($markup)
    {
        // stub
    }

    /**
     * Registers shortcodes.
     */
    public function register_shortcodes()
    {
        // stub
    }

    /**
     * Displays product brand.
     *
     * @param array $atts Attributes from the shortcode.
     * @return string The generated output.
     */
    public function output_product_brand($atts)
    {
        // stub
    }

    /**
     * Displays product brand list.
     *
     * @param array $atts Attributes from the shortcode.
     * @return string
     */
    public function output_product_brand_list($atts)
    {
        // stub
    }

    /**
     * Get the first letter of the brand name, returning lowercase and without accents.
     *
     * @param string $name
     *
     * @return string
     * @since  9.4.0
     */
    private function get_brand_name_first_character($name)
    {
        // stub
    }

    /**
     * Displays brand thumbnails.
     *
     * @param mixed $atts
     * @return void
     */
    public function output_product_brand_thumbnails($atts)
    {
        // stub
    }

    /**
     * Displays brand thumbnails description.
     *
     * @param mixed $atts
     * @return void
     */
    public function output_product_brand_thumbnails_description($atts)
    {
        // stub
    }

    /**
     * Displays brand products.
     *
     * @param array $atts
     * @return string
     */
    public function output_brand_products($atts)
    {
        // stub
    }

    /**
     * Adds the taxonomy query to the WooCommerce products shortcode query arguments.
     *
     * @param array  $query_args
     * @param array  $attributes
     * @param string $type
     *
     * @return array
     */
    public static function get_brand_products_query_args($query_args, $attributes, $type)
    {
        // stub
    }

    /**
     * Adds the "brand" attribute to the list of WooCommerce products shortcode attributes.
     *
     * @param array  $out       The output array of shortcode attributes.
     * @param array  $pairs     The supported attributes and their defaults.
     * @param array  $atts      The user defined shortcode attributes.
     * @param string $shortcode The shortcode name.
     *
     * @return array The output array of shortcode attributes.
     */
    public static function add_brand_products_shortcode_atts($out, $pairs, $atts, $shortcode)
    {
        // stub
    }

    /**
     * Register REST API route for /products/brands.
     *
     * @since 9.4.0
     *
     * @return void
     */
    public function rest_api_register_routes()
    {
        // stub
    }

    /**
     * Maybe set brands when requesting PUT /products/<id>.
     *
     * @since 9.4.0
     *
     * @param WP_Post         $post    Post object
     * @param WP_REST_Request $request Request object
     *
     * @return void
     */
    public function rest_api_maybe_set_brands($post, $request)
    {
        // stub
    }

    /**
     * Prepare brands in product response.
     *
     * @param WP_REST_Response $response   The response object.
     * @param WP_Post|WC_Data  $post       Post object or WC object.
     * @version 9.4.0
     * @return WP_REST_Response
     */
    public function rest_api_prepare_brands_to_product($response, $post)
    {
        // stub
    }

    /**
     * Add brands in product response.
     *
     * @param WC_Data         $product   Inserted product object.
     * @param WP_REST_Request $request   Request object.
     * @param boolean         $creating  True when creating object, false when updating.
     * @version 9.4.0
     */
    public function rest_api_add_brands_to_product($product, $request, $creating = true)
    {
        // stub
    }

    /**
     * Filters products by taxonomy product_brand.
     *
     * @param array           $args    Request args.
     * @param WP_REST_Request $request Request data.
     * @return array Request args.
     * @version 9.4.0
     */
    public function rest_api_filter_products_by_brand($args, $request)
    {
        // stub
    }

    /**
     * Documents additional query params for collections of products.
     *
     * @param array        $params JSON Schema-formatted collection parameters.
     * @param WP_Post_Type $post_type   Post type object.
     * @return array JSON Schema-formatted collection parameters.
     * @version 9.4.0
     */
    public function rest_api_product_collection_params($params, $post_type)
    {
        // stub
    }

    /**
     * Injects Brands filters into layered nav links.
     *
     * @param  string $term_html Original link html.
     * @param  mixed  $term      Term that is currently added.
     * @param  string $link      Original layered nav item link.
     * @param  number $count     Number of items in that filter.
     * @return string            Term html.
     * @version 9.4.0
     */
    public function woocommerce_brands_update_layered_nav_link($term_html, $term, $link, $count)
    {
        // stub
    }

    /**
     * Temporarily tag a post with meta before it is saved in order
     * to allow us to be able to use the meta when the product is saved to add
     * the brands when an ID has been generated.
     *
     *
     * @param WC_Product $duplicate
     * @return WC_Product $original
     */
    public function duplicate_store_temporary_brands($duplicate, $original)
    {
        // stub
    }

    /**
     * After product was added check if there are temporary brands and
     * add them officially and remove the temporary brands.
     *
     * @since 9.4.0
     *
     * @param int $product_id
     */
    public function duplicate_add_product_brand_terms($product_id)
    {
        // stub
    }

    /**
     * Remove terms with empty products.
     *
     * @param WP_Term[] $terms The terms array that needs to be removed of empty products.
     *
     * @return WP_Term[]
     */
    private function remove_terms_with_empty_products($terms)
    {
        // stub
    }

    /**
     * Invalidates the layered nav counts cache.
     *
     * @return void
     */
    public function invalidate_wc_layered_nav_counts_cache()
    {
        // stub
    }

    /**
     * Reset Layered Nav cached counts on product status change.
     *
     * @param $new_status
     * @param $old_status
     * @param $post
     *
     * @return void
     */
    public function reset_layered_nav_counts_on_status_change($new_status, $old_status, $post)
    {
        // stub
    }

    /**
     * Add a new block to the template.
     *
     * @param string                 $template_id Template ID.
     * @param string                 $template_area Template area.
     * @param BlockTemplateInterface $template Template instance.
     */
    public function wc_brands_on_block_template_register($template_id, $template_area, $template)
    {
        // stub
    }

}

