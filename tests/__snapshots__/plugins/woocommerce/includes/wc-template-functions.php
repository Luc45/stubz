<?php
/**
 * Handle redirects before content is output - hooked into template_redirect so is_page works.
 */
function wc_template_redirect()
{
}
/**
 * When loading sensitive checkout or account pages, send a HTTP header to limit rendering of pages to same origin iframes for security reasons.
 *
 * Can be disabled with: remove_action( 'template_redirect', 'wc_send_frame_options_header' );
 *
 * @since  2.3.10
 */
function wc_send_frame_options_header()
{
}
/**
 * No index our endpoints.
 * Prevent indexing pages like order-received.
 *
 * @since 2.5.3
 */
function wc_prevent_endpoint_indexing()
{
}
/**
 * Remove adjacent_posts_rel_link_wp_head - pointless for products.
 *
 * @since 3.0.0
 */
function wc_prevent_adjacent_posts_rel_link_wp_head()
{
}
/**
 * Show the gallery if JS is disabled.
 *
 * @since 3.0.6
 */
function wc_gallery_noscript()
{
}
/**
 * When the_post is called, put product data into a global.
 *
 * @param mixed $post Post Object.
 * @return WC_Product
 */
function wc_setup_product_data($post)
{
}
/**
 * Sets up the woocommerce_loop global from the passed args or from the main query.
 *
 * @since 3.3.0
 * @param array $args Args to pass into the global.
 */
function wc_setup_loop($args = array())
{
}
/**
 * Resets the woocommerce_loop global.
 *
 * @since 3.3.0
 */
function wc_reset_loop()
{
}
/**
 * Gets a property from the woocommerce_loop global.
 *
 * @since 3.3.0
 * @param string $prop Prop to get.
 * @param string $default Default if the prop does not exist.
 * @return mixed
 */
function wc_get_loop_prop($prop, $default = '')
{
}
/**
 * Sets a property in the woocommerce_loop global.
 *
 * @since 3.3.0
 * @param string $prop Prop to set.
 * @param string $value Value to set.
 */
function wc_set_loop_prop($prop, $value = '')
{
}
/**
 * Set the current visibility for a product in the woocommerce_loop global.
 *
 * @since 4.4.0
 * @param int  $product_id Product it to cache visibility for.
 * @param bool $value The product visibility value to cache.
 */
function wc_set_loop_product_visibility($product_id, $value)
{
}
/**
 * Gets the cached current visibility for a product from the woocommerce_loop global.
 *
 * @since 4.4.0
 * @param int $product_id Product id to get the cached visibility for.
 *
 * @return bool|null The cached product visibility, or null if on visibility has been cached for that product.
 */
function wc_get_loop_product_visibility($product_id)
{
}
/**
 * Should the WooCommerce loop be displayed?
 *
 * This will return true if we have posts (products) or if we have subcats to display.
 *
 * @since 3.4.0
 * @return bool
 */
function woocommerce_product_loop()
{
}
/**
 * Output generator tag to aid debugging.
 *
 * @param string $gen Generator.
 * @param string $type Type.
 * @return string
 */
function wc_generator_tag($gen, $type)
{
}
/**
 * Add body classes for WC pages.
 *
 * @param  array $classes Body Classes.
 * @return array
 */
function wc_body_class($classes)
{
}
/**
 * NO JS handling.
 *
 * @since 3.4.0
 */
function wc_no_js()
{
}
/**
 * Display the classes for the product cat div.
 *
 * @since 2.4.0
 * @param string|array $class One or more classes to add to the class list.
 * @param object       $category object Optional.
 */
function wc_product_cat_class($class = '', $category = null)
{
}
/**
 * Get the default columns setting - this is how many products will be shown per row in loops.
 *
 * @since 3.3.0
 * @return int
 */
function wc_get_default_products_per_row()
{
}
/**
 * Get the default rows setting - this is how many product rows will be shown in loops.
 *
 * @since 3.3.0
 * @return int
 */
function wc_get_default_product_rows_per_page()
{
}
/**
 * Reset the product grid settings when a new theme is activated.
 *
 * @since 3.3.0
 */
function wc_reset_product_grid_settings()
{
}
/**
 * Get classname for woocommerce loops.
 *
 * @since 2.6.0
 * @return string
 */
function wc_get_loop_class()
{
}
/**
 * Get the classes for the product cat div.
 *
 * @since 2.4.0
 *
 * @param string|array $class One or more classes to add to the class list.
 * @param object       $category object Optional.
 *
 * @return array
 */
function wc_get_product_cat_class($class = '', $category = null)
{
}
/**
 * Adds extra post classes for products via the WordPress post_class hook, if used.
 *
 * Note: For performance reasons we instead recommend using wc_product_class/wc_get_product_class instead.
 *
 * @since 2.1.0
 * @param array        $classes Current classes.
 * @param string|array $class Additional class.
 * @param int          $post_id Post ID.
 * @return array
 */
function wc_product_post_class($classes, $class = '', $post_id = 0)
{
}
/**
 * Get product taxonomy HTML classes.
 *
 * @since 3.4.0
 * @param array  $term_ids Array of terms IDs or objects.
 * @param string $taxonomy Taxonomy.
 * @return array
 */
function wc_get_product_taxonomy_class($term_ids, $taxonomy)
{
}
/**
 * Retrieves the classes for the post div as an array.
 *
 * This method was modified from WordPress's get_post_class() to allow the removal of taxonomies
 * (for performance reasons). Previously wc_product_post_class was hooked into post_class. @since 3.6.0
 *
 * @since 3.4.0
 * @param string|array           $class      One or more classes to add to the class list.
 * @param int|WP_Post|WC_Product $product Product ID or product object.
 * @return array
 */
function wc_get_product_class($class = '', $product = null)
{
}
/**
 * Display the classes for the product div.
 *
 * @since 3.4.0
 * @param string|array           $class      One or more classes to add to the class list.
 * @param int|WP_Post|WC_Product $product_id Product ID or product object.
 */
function wc_product_class($class = '', $product_id = null)
{
}
/**
 * Outputs hidden form inputs for each query string variable.
 *
 * @since 3.0.0
 * @param string|array $values Name value pairs, or a URL to parse.
 * @param array        $exclude Keys to exclude.
 * @param string       $current_key Current key we are outputting.
 * @param bool         $return Whether to return.
 * @return string
 */
function wc_query_string_form_fields($values = null, $exclude = array(), $current_key = '', $return = false)
{
}
/**
 * Get the terms and conditions page ID.
 *
 * @since 3.4.0
 * @return int
 */
function wc_terms_and_conditions_page_id()
{
}
/**
 * Get the privacy policy page ID.
 *
 * @since 3.4.0
 * @return int
 */
function wc_privacy_policy_page_id()
{
}
/**
 * See if the checkbox is enabled or not based on the existence of the terms page and checkbox text.
 *
 * @since 3.4.0
 * @return bool
 */
function wc_terms_and_conditions_checkbox_enabled()
{
}
/**
 * Get the terms and conditions checkbox text, if set.
 *
 * @since 3.4.0
 * @return string
 */
function wc_get_terms_and_conditions_checkbox_text()
{
}
/**
 * Get the privacy policy text, if set.
 *
 * @since 3.4.0
 * @param string $type Type of policy to load. Valid values include registration and checkout.
 * @return string
 */
function wc_get_privacy_policy_text($type = '')
{
}
/**
 * Output t&c checkbox text.
 *
 * @since 3.4.0
 */
function wc_terms_and_conditions_checkbox_text()
{
}
/**
 * Output t&c page's content (if set). The page can be set from checkout settings.
 *
 * @since 3.4.0
 */
function wc_terms_and_conditions_page_content()
{
}
/**
 * Render privacy policy text on the checkout.
 *
 * @since 3.4.0
 */
function wc_checkout_privacy_policy_text()
{
}
/**
 * Render privacy policy text on the register forms.
 *
 * @since 3.4.0
 */
function wc_registration_privacy_policy_text()
{
}
/**
 * Output privacy policy text. This is custom text which can be added via the customizer/privacy settings section.
 *
 * Loads the relevant policy for the current page unless a specific policy text is required.
 *
 * @since 3.4.0
 * @param string $type Type of policy to load. Valid values include registration and checkout.
 */
function wc_privacy_policy_text($type = 'checkout')
{
}
/**
 * Replaces placeholders with links to WooCommerce policy pages.
 *
 * @since 3.4.0
 * @param string $text Text to find/replace within.
 * @return string
 */
function wc_replace_policy_page_link_placeholders($text)
{
}
/**
 * Output WooCommerce content.
 *
 * This function is only used in the optional 'woocommerce.php' template.
 * which people can add to their themes to add basic woocommerce support.
 * without hooks or modifying core templates.
 */
function woocommerce_content()
{
}
/**
 * Output the start of the page wrapper.
 */
function woocommerce_output_content_wrapper()
{
}
/**
 * Output the end of the page wrapper.
 */
function woocommerce_output_content_wrapper_end()
{
}
/**
 * Get the shop sidebar template.
 */
function woocommerce_get_sidebar()
{
}
/**
 * Adds a demo store banner to the site if enabled.
 */
function woocommerce_demo_store()
{
}
/**
 * Page Title function.
 *
 * @param  bool $echo Should echo title.
 * @return string
 */
function woocommerce_page_title($echo = true)
{
}
/**
 * Output the start of a product loop. By default this is a UL.
 *
 * @param bool $echo Should echo?.
 * @return string
 */
function woocommerce_product_loop_start($echo = true)
{
}
/**
 * Output the end of a product loop. By default this is a UL.
 *
 * @param bool $echo Should echo?.
 * @return string
 */
function woocommerce_product_loop_end($echo = true)
{
}
/**
 * Show the product title in the product loop. By default this is an H2.
 */
function woocommerce_template_loop_product_title()
{
}
/**
 * Show the subcategory title in the product loop.
 *
 * @param object $category Category object.
 */
function woocommerce_template_loop_category_title($category)
{
}
/**
 * Insert the opening anchor tag for products in the loop.
 */
function woocommerce_template_loop_product_link_open()
{
}
/**
 * Insert the closing anchor tag for products in the loop.
 */
function woocommerce_template_loop_product_link_close()
{
}
/**
 * Insert the opening anchor tag for categories in the loop.
 *
 * @param int|object|string $category Category ID, Object or String.
 */
function woocommerce_template_loop_category_link_open($category)
{
}
/**
 * Insert the closing anchor tag for categories in the loop.
 */
function woocommerce_template_loop_category_link_close()
{
}
/**
 * Output the products header on taxonomy archives.
 */
function woocommerce_product_taxonomy_archive_header()
{
}
/**
 * Show an archive description on taxonomy archives.
 */
function woocommerce_taxonomy_archive_description()
{
}
/**
 * Show a shop page description on product archives.
 */
function woocommerce_product_archive_description()
{
}
/**
 * Get the add to cart template for the loop.
 *
 * @param array $args Arguments.
 */
function woocommerce_template_loop_add_to_cart($args = array())
{
}
/**
 * Get the product thumbnail for the loop.
 */
function woocommerce_template_loop_product_thumbnail()
{
}
/**
 * Get the product price for the loop.
 */
function woocommerce_template_loop_price()
{
}
/**
 * Display the average rating in the loop.
 */
function woocommerce_template_loop_rating()
{
}
/**
 * Get the sale flash for the loop.
 */
function woocommerce_show_product_loop_sale_flash()
{
}
/**
 * Get the product thumbnail, or the placeholder if not set.
 *
 * @param string $size (default: 'woocommerce_thumbnail').
 * @param  array  $attr Image attributes.
 * @param  bool   $placeholder True to return $placeholder if no image is found, or false to return an empty string.
 * @return string
 */
function woocommerce_get_product_thumbnail($size = 'woocommerce_thumbnail', $attr = array(), $placeholder = true)
{
}
/**
 * Output the result count text (Showing x - x of x results).
 */
function woocommerce_result_count()
{
}
/**
 * Output the product sorting options.
 *
 * @param array|null $attributes Block attributes.
 */
function woocommerce_catalog_ordering($attributes = null)
{
}
/**
 * Output the pagination.
 */
function woocommerce_pagination()
{
}
/**
 * Output the product image before the single product summary.
 */
function woocommerce_show_product_images()
{
}
/**
 * Output the product thumbnails.
 */
function woocommerce_show_product_thumbnails()
{
}
/**
 * Get HTML for a gallery image.
 *
 * Hooks: woocommerce_gallery_thumbnail_size, woocommerce_gallery_image_size and woocommerce_gallery_full_size accept name based image sizes, or an array of width/height values.
 *
 * @since 3.3.2
 * @param int  $attachment_id Attachment ID.
 * @param bool $main_image Is this the main image or a thumbnail?.
 * @param int  $image_index The image index in the gallery.
 * @return string
 */
function wc_get_gallery_image_html($attachment_id, $main_image = false, $image_index = -1)
{
}
/**
 * Get alt text based on product name and image position in gallery.
 *
 * @since 9.3.3
 * @param string $product_name Product name.
 * @param bool   $main_image Is this the main image or a thumbnail?.
 * @param int    $image_index Image position in gallery.
 * @return string Alt text.
 */
function woocommerce_get_alt_from_product_title_and_position($product_name, $main_image, $image_index)
{
}
/**
 * Output the product tabs.
 */
function woocommerce_output_product_data_tabs()
{
}
/**
 * Output the product title.
 */
function woocommerce_template_single_title()
{
}
/**
 * Output the product rating.
 */
function woocommerce_template_single_rating()
{
}
/**
 * Output the product price.
 */
function woocommerce_template_single_price()
{
}
/**
 * Output the product short description (excerpt).
 */
function woocommerce_template_single_excerpt()
{
}
/**
 * Output the product meta.
 */
function woocommerce_template_single_meta()
{
}
/**
 * Output the product sharing.
 */
function woocommerce_template_single_sharing()
{
}
/**
 * Output the product sale flash.
 */
function woocommerce_show_product_sale_flash()
{
}
/**
 * Trigger the single product add to cart action.
 */
function woocommerce_template_single_add_to_cart()
{
}
/**
 * Output the simple product add to cart area.
 */
function woocommerce_simple_add_to_cart()
{
}
/**
 * Output the grouped product add to cart area.
 */
function woocommerce_grouped_add_to_cart()
{
}
/**
 * Output the variable product add to cart area.
 */
function woocommerce_variable_add_to_cart()
{
}
/**
 * Output the external product add to cart area.
 */
function woocommerce_external_add_to_cart()
{
}
/**
 * Output the quantity input for add to cart forms.
 *
 * @param  array           $args Args for the input.
 * @param  WC_Product|null $product Product.
 * @param  boolean         $echo Whether to return or echo|string.
 *
 * @return string
 */
function woocommerce_quantity_input($args = array(), $product = null, $echo = true)
{
}
/**
 * Output the description tab content.
 */
function woocommerce_product_description_tab()
{
}
/**
 * Output the attributes tab content.
 */
function woocommerce_product_additional_information_tab()
{
}
/**
 * Add default product tabs to product pages.
 *
 * @param array $tabs Array of tabs.
 * @return array
 */
function woocommerce_default_product_tabs($tabs = array())
{
}
/**
 * Sort tabs by priority.
 *
 * @param array $tabs Array of tabs.
 * @return array
 */
function woocommerce_sort_product_tabs($tabs = array())
{
}
/**
 * Sort Priority Callback Function
 *
 * @param array $a Comparison A.
 * @param array $b Comparison B.
 * @return bool
 */
function _sort_priority_callback($a, $b)
{
}
/**
 * Output the Review comments template.
 *
 * @param WP_Comment $comment Comment object.
 * @param array      $args Arguments.
 * @param int        $depth Depth.
 */
function woocommerce_comments($comment, $args, $depth)
{
}
/**
 * Display the review authors gravatar
 *
 * @param array $comment WP_Comment.
 * @return void
 */
function woocommerce_review_display_gravatar($comment)
{
}
/**
 * Display the reviewers star rating
 *
 * @return void
 */
function woocommerce_review_display_rating()
{
}
/**
 * Display the review authors meta (name, verified owner, review date)
 *
 * @return void
 */
function woocommerce_review_display_meta()
{
}
/**
 * Display the review content.
 */
function woocommerce_review_display_comment_text()
{
}
/**
 * Output the related products.
 */
function woocommerce_output_related_products()
{
}
/**
 * Output the related products.
 *
 * @param array $args Provided arguments.
 */
function woocommerce_related_products($args = array())
{
}
/**
 * Output product up sells.
 *
 * @param int    $limit (default: -1).
 * @param int    $columns (default: 4).
 * @param string $orderby Supported values - rand, title, ID, date, modified, menu_order, price.
 * @param string $order Sort direction.
 */
function woocommerce_upsell_display($limit = -1, $columns = 4, $orderby = 'rand', $order = 'desc')
{
}
/**
 * Output the cart shipping calculator.
 *
 * @param string $button_text Text for the shipping calculation toggle.
 */
function woocommerce_shipping_calculator($button_text = '')
{
}
/**
 * Output the cart totals.
 */
function woocommerce_cart_totals()
{
}
/**
 * Output the cart cross-sells.
 *
 * @param  int    $limit (default: 2).
 * @param  int    $columns (default: 2).
 * @param  string $orderby (default: 'rand').
 * @param  string $order (default: 'desc').
 */
function woocommerce_cross_sell_display($limit = 2, $columns = 2, $orderby = 'rand', $order = 'desc')
{
}
/**
 * Output the proceed to checkout button.
 */
function woocommerce_button_proceed_to_checkout()
{
}
/**
 * Output the view cart button.
 */
function woocommerce_widget_shopping_cart_button_view_cart()
{
}
/**
 * Output the proceed to checkout button.
 */
function woocommerce_widget_shopping_cart_proceed_to_checkout()
{
}
/**
 * Output to view cart subtotal.
 *
 * @since 3.7.0
 */
function woocommerce_widget_shopping_cart_subtotal()
{
}
/**
 * Output the Mini-cart - used by cart widget.
 *
 * @param array $args Arguments.
 */
function woocommerce_mini_cart($args = array())
{
}
/**
 * Output the WooCommerce Login Form.
 *
 * @param array $args Arguments.
 */
function woocommerce_login_form($args = array())
{
}
/**
 * Output the WooCommerce Checkout Login Form.
 */
function woocommerce_checkout_login_form()
{
}
/**
 * Output the WooCommerce Breadcrumb.
 *
 * @param array $args Arguments.
 */
function woocommerce_breadcrumb($args = array())
{
}
/**
 * Output the Order review table for the checkout.
 *
 * @param bool $deprecated Deprecated param.
 */
function woocommerce_order_review($deprecated = false)
{
}
/**
 * Output the Payment Methods on the checkout.
 */
function woocommerce_checkout_payment()
{
}
/**
 * Output the Coupon form for the checkout.
 */
function woocommerce_checkout_coupon_form()
{
}
/**
 * Check if we will be showing products or not (and not sub-categories only).
 *
 * @return bool
 */
function woocommerce_products_will_display()
{
}
/**
 * See what is going to display in the loop.
 *
 * @since 3.3.0
 * @return string Either products, subcategories, or both, based on current page.
 */
function woocommerce_get_loop_display_mode()
{
}
/**
 * Maybe display categories before, or instead of, a product loop.
 *
 * @since 3.3.0
 * @param string $loop_html HTML.
 * @return string
 */
function woocommerce_maybe_show_product_subcategories($loop_html = '')
{
}
/**
 * This is a legacy function which used to check if we needed to display subcats and then output them. It was called by templates.
 *
 * From 3.3 onwards this is all handled via hooks and the woocommerce_maybe_show_product_subcategories function.
 *
 * Since some templates have not updated compatibility, to avoid showing incorrect categories this function has been deprecated and will
 * return nothing. Replace usage with woocommerce_output_product_categories to render the category list manually.
 *
 * This is a legacy function which also checks if things should display.
 * Themes no longer need to call these functions. It's all done via hooks.
 *
 * @deprecated 3.3.1 @todo Add a notice in a future version.
 * @param array $args Arguments.
 * @return null|boolean
 */
function woocommerce_product_subcategories($args = array())
{
}
/**
 * Display product sub categories as thumbnails.
 *
 * This is a replacement for woocommerce_product_subcategories which also does some logic
 * based on the loop. This function however just outputs when called.
 *
 * @since 3.3.1
 * @param array $args Arguments.
 * @return boolean
 */
function woocommerce_output_product_categories($args = array())
{
}
/**
 * Get (and cache) product subcategories.
 *
 * @param int $parent_id Get subcategories of this ID.
 * @return array
 */
function woocommerce_get_product_subcategories($parent_id = 0)
{
}
/**
 * Show subcategory thumbnails.
 *
 * @param mixed $category Category.
 */
function woocommerce_subcategory_thumbnail($category)
{
}
/**
 * Displays order details in a table.
 *
 * @param mixed $order_id Order ID.
 */
function woocommerce_order_details_table($order_id)
{
}
/**
 * Displays order downloads in a table.
 *
 * @since 3.2.0
 * @param array $downloads Downloads.
 */
function woocommerce_order_downloads_table($downloads)
{
}
/**
 * Display an 'order again' button on the view order page.
 *
 * @param object $order Order.
 */
function woocommerce_order_again_button($order)
{
}
/**
 * Outputs a checkout/address form field.
 *
 * @param string $key Key.
 * @param mixed  $args Arguments.
 * @param string $value (default: null).
 * @return string
 */
function woocommerce_form_field($key, $args, $value = null)
{
}
/**
 * Display product search form.
 *
 * Will first attempt to locate the product-searchform.php file in either the child or.
 * the parent, then load it. If it doesn't exist, then the default search form.
 * will be displayed.
 *
 * The default searchform uses html5.
 *
 * @param bool $echo (default: true).
 * @return string
 */
function get_product_search_form($echo = true)
{
}
/**
 * Output the Auth header.
 */
function woocommerce_output_auth_header()
{
}
/**
 * Output the Auth footer.
 */
function woocommerce_output_auth_footer()
{
}
/**
 * Output placeholders for the single variation.
 */
function woocommerce_single_variation()
{
}
/**
 * Output the add to cart button for variations.
 */
function woocommerce_single_variation_add_to_cart_button()
{
}
/**
 * Output a list of variation attributes for use in the cart forms.
 *
 * @param array $args Arguments.
 * @since 2.4.0
 */
function wc_dropdown_variation_attribute_options($args = array())
{
}
/**
 * My Account content output.
 */
function woocommerce_account_content()
{
}
/**
 * My Account navigation template.
 */
function woocommerce_account_navigation()
{
}
/**
 * My Account > Orders template.
 *
 * @param int $current_page Current page number.
 */
function woocommerce_account_orders($current_page)
{
}
/**
 * My Account > View order template.
 *
 * @param int $order_id Order ID.
 */
function woocommerce_account_view_order($order_id)
{
}
/**
 * My Account > Downloads template.
 */
function woocommerce_account_downloads()
{
}
/**
 * My Account > Edit address template.
 *
 * @param string $type Type of address; 'billing' or 'shipping'.
 */
function woocommerce_account_edit_address($type)
{
}
/**
 * My Account > Downloads template.
 */
function woocommerce_account_payment_methods()
{
}
/**
 * My Account > Add payment method template.
 */
function woocommerce_account_add_payment_method()
{
}
/**
 * My Account > Edit account template.
 */
function woocommerce_account_edit_account()
{
}
/**
 * Handles the loop when no products were found/no product exist.
 */
function wc_no_products_found()
{
}
/**
 * Get HTML for the order items to be shown in emails.
 *
 * @param WC_Order $order Order object.
 * @param array    $args Arguments.
 *
 * @since 3.0.0
 * @return string
 */
function wc_get_email_order_items($order, $args = array())
{
}
/**
 * Display item meta data.
 *
 * @since  3.0.0
 * @param  WC_Order_Item $item Order Item.
 * @param  array         $args Arguments.
 * @return string|void
 */
function wc_display_item_meta($item, $args = array())
{
}
/**
 * Display item download links.
 *
 * @since  3.0.0
 * @param  WC_Order_Item $item Order Item.
 * @param  array         $args Arguments.
 * @return string|void
 */
function wc_display_item_downloads($item, $args = array())
{
}
/**
 * Get the shop sidebar template.
 */
function woocommerce_photoswipe()
{
}
/**
 * Outputs a list of product attributes for a product.
 *
 * @since  3.0.0
 * @param  WC_Product $product Product Object.
 */
function wc_display_product_attributes($product)
{
}
/**
 * Get HTML to show product stock.
 *
 * @since  3.0.0
 * @param  WC_Product $product Product Object.
 * @return string
 */
function wc_get_stock_html($product)
{
}
/**
 * Get HTML for ratings.
 *
 * @since  3.0.0
 * @param  float $rating Rating being shown.
 * @param  int   $count  Total number of ratings.
 * @return string
 */
function wc_get_rating_html($rating, $count = 0)
{
}
/**
 * Get HTML for star rating.
 *
 * @since  3.1.0
 * @param  float $rating Rating being shown.
 * @param  int   $count  Total number of ratings.
 * @return string
 */
function wc_get_star_rating_html($rating, $count = 0)
{
}
/**
 * Returns a 'from' prefix if you want to show where prices start at.
 *
 * @since  3.0.0
 * @return string
 */
function wc_get_price_html_from_text()
{
}
/**
 * Get the redirect URL after logging out. Defaults to the my account page.
 *
 * @since 9.3.0
 * @return string
 */
function wc_get_logout_redirect_url()
{
}
/**
 * Get logout link.
 *
 * @since  2.6.9
 * @param string $redirect Redirect URL.
 * @return string
 */
function wc_logout_url($redirect = '')
{
}
/**
 * Show notice if cart is empty.
 *
 * @since 3.1.0
 */
function wc_empty_cart_message()
{
}
/**
 * Disable search engines indexing core, dynamic, cart/checkout pages.
 *
 * @todo Deprecated this function after dropping support for WP 5.6.
 * @since 3.2.0
 */
function wc_page_noindex()
{
}
/**
 * Disable search engines indexing core, dynamic, cart/checkout pages.
 * Uses "wp_robots" filter introduced in WP 5.7.
 *
 * @since 5.0.0
 * @param array $robots Associative array of robots directives.
 * @return array Filtered robots directives.
 */
function wc_page_no_robots($robots)
{
}
/**
 * Get a slug identifying the current theme.
 *
 * @since 3.3.0
 * @return string
 */
function wc_get_theme_slug_for_templates()
{
}
/**
 * Gets and formats a list of cart item data + variations for display on the frontend.
 *
 * @since 3.3.0
 * @param array $cart_item Cart item object.
 * @param bool  $flat Should the data be returned flat or in a list.
 * @return string
 */
function wc_get_formatted_cart_item_data($cart_item, $flat = false)
{
}
/**
 * Gets the url to remove an item from the cart.
 *
 * @since 3.3.0
 * @param string $cart_item_key contains the id of the cart item.
 * @return string url to page
 */
function wc_get_cart_remove_url($cart_item_key)
{
}
/**
 * Gets the url to re-add an item into the cart.
 *
 * @since 3.3.0
 * @param  string $cart_item_key Cart item key to undo.
 * @return string url to page
 */
function wc_get_cart_undo_url($cart_item_key)
{
}
/**
 * Outputs all queued notices on WC pages.
 *
 * @since 3.5.0
 */
function woocommerce_output_all_notices()
{
}
/**
 * Products RSS Feed.
 *
 * @deprecated 2.6
 */
function wc_products_rss_feed()
{
}
/**
 * Reset the loop's index and columns when we're done outputting a product loop.
 *
 * @deprecated 3.3
 */
function woocommerce_reset_loop()
{
}
/**
 * Output the reviews tab content.
 *
 * @deprecated 2.4.0 Unused.
 */
function woocommerce_product_reviews_tab()
{
}
/**
 * Display pay buttons HTML.
 *
 * @since 3.9.0
 */
function wc_get_pay_buttons()
{
}
/**
 * Update the product archive title to the title of the shop page. Fallback to
 * 'Shop' if the shop page doesn't exist.
 *
 * @param string $post_type_name Post type 'name' label.
 * @param string $post_type      Post type.
 *
 * @return string
 */
function wc_update_product_archive_title($post_type_name, $post_type)
{
}
/**
 * Set the version of the hooked blocks in the database. Used when WC is installed for the first time.
 *
 * @since 9.2.0
 *
 * @return void
 */
function wc_set_hooked_blocks_version()
{
}
/**
 * Attach functions that listen to theme switches.
 *
 * @since 9.7.0
 *
 * @param string    $old_name Old theme name.
 * @param \WP_Theme $old_theme Instance of the old theme.
 * @return void
 */
function wc_after_switch_theme($old_name, $old_theme)
{
}
/**
 * Update the Store Notice visibility when switching themes:
 * - When switching from a classic theme to a block theme, disable the Store Notice.
 * - When switching from a block theme to a classic theme, re-enable the Store Notice
 *   only if it was enabled last time there was a switchi from a classic theme to a block theme.
 *
 * @since 9.7.0
 *
 * @param string    $old_name Old theme name.
 * @param \WP_Theme $old_theme Instance of the old theme.
 * @return void
 */
function wc_update_store_notice_visible_on_theme_switch($old_name, $old_theme)
{
}
/**
 * If the user switches from a classic to a block theme and they haven't already got a woocommerce_hooked_blocks_version,
 * set the version of the hooked blocks in the database, or as "no" to disable all block hooks then set as the latest WC version.
 *
 * @since 9.2.0
 *
 * @param string    $old_name Old theme name.
 * @param \WP_Theme $old_theme Instance of the old theme.
 * @return void
 */
function wc_set_hooked_blocks_version_on_theme_switch($old_name, $old_theme)
{
}
/**
 * Add aria-label to pagination numbers.
 *
 * @param string $html HTML output.
 * @param array  $args An array of arguments. See paginate_links()
 *                     for information on accepted arguments.
 *
 * @return string
 */
function wc_add_aria_label_to_pagination_numbers($html, $args)
{
}
