<?php

namespace Automattic\WooCommerce\Blocks\AIContent;

/**
 * Pattern Images class.
 *
 * @internal
 */
class UpdateProducts
{
    public const DUMMY_PRODUCTS = array(
array(
'title' => 'Vintage Typewriter',
'image' => 'assets/images/pattern-placeholders/writing-typing-keyboard-technology-white-vintage.jpg',
'description' => 'A hit spy novel or a love letter? Anything you type using this vintage typewriter from the 20s is bound to make a mark.',
'price' => 90
),
array(
'title' => 'Leather-Clad Leisure Chair',
'image' => 'assets/images/pattern-placeholders/table-wood-house-chair-floor-window.jpg',
'description' => 'Sit back and relax in this comfy designer chair. High-grain leather and steel frame add luxury to your your leisure.',
'price' => 249
),
array(
'title' => 'Black and White',
'image' => 'assets/images/pattern-placeholders/white-black-black-and-white-photograph-monochrome-photography.jpg',
'description' => 'This 24" x 30" high-quality print just exudes summer. Hang it on the wall and forget about the world outside.',
'price' => 115
),
array(
'title' => '3-Speed Bike',
'image' => 'assets/images/pattern-placeholders/road-sport-vintage-wheel-retro-old.jpg',
'description' => 'Zoom through the streets on this premium 3-speed bike. Manufactured and assembled in Germany in the 80s.',
'price' => 115
),
array(
'title' => 'Hi-Fi Headphones',
'image' => 'assets/images/pattern-placeholders/man-person-music-black-and-white-white-photography.jpg',
'description' => 'Experience your favorite songs in a new way with these premium hi-fi headphones.',
'price' => 125
),
array(
'title' => 'Retro Glass Jug (330 ml)',
'image' => 'assets/images/pattern-placeholders/drinkware-liquid-tableware-dishware-bottle-fluid.jpg',
'description' => 'Thick glass and a classic silhouette make this jug a must-have for any retro-inspired kitchen.',
'price' => 115
)
);
    /**
     * Generate AI content and assign AI-managed images to Products.
     *
     * @param Connection      $ai_connection The AI connection.
     * @param string|WP_Error $token The JWT token.
     * @param array|WP_Error  $images The array of images.
     * @param string          $business_description The business description.
     *
     * @return array|WP_Error The generated content for the products. An error if the content could not be generated.
     */
    public function generate_content($ai_connection, $token, $images, $business_description)
{
}
    /**
     * Return all dummy products that were not modified by the store owner.
     *
     * @return array|WP_Error An array with the dummy products that need to have their content updated by AI.
     */
    public function fetch_dummy_products_to_update()
{
}
    /**
     * Verify if the dummy product should have its content generated and managed by AI.
     *
     * @param \WC_Product $dummy_product The dummy product.
     *
     * @return bool
     */
    public function should_update_dummy_product($dummy_product): bool
{
}
    /**
     * Creates a new product and assigns the _headstart_post meta to it.
     *
     * @param array $product_data The product data.
     *
     * @return bool|int|\WP_Error
     */
    public function create_new_product($product_data)
{
}
    /**
     * Return all existing products that have the _headstart_post meta assigned to them.
     *
     * @param string $type The type of products to fetch.
     *
     * @return array|null
     */
    public function fetch_product_ids(string $type = 'user_created')
{
}
    /**
     * Return the hash for a product based on its name, description and image_id.
     *
     * @param \WC_Product $product The product.
     *
     * @return false|string
     */
    public function get_hash_for_product($product)
{
}
    /**
     * Return the hash for a product that had its content AI-generated.
     *
     * @param \WC_Product $product The product.
     *
     * @return false|mixed
     */
    public function get_hash_for_ai_modified_product($product)
{
}
    /**
     * Create a hash with the AI-generated content and save it as a meta for the product.
     *
     * @param \WC_Product $product The product.
     *
     * @return bool|int
     */
    public function create_hash_for_ai_modified_product($product)
{
}
    /**
     * Update the product content with the AI-generated content.
     *
     * @param array $ai_generated_product_content The AI-generated product content.
     *
     * @return void|WP_Error
     */
    public function update_product_content($ai_generated_product_content)
{
}
    /**
     * Assigns the default content for the products.
     *
     * @param array $dummy_products_to_update The dummy products to update.
     * @param array $ai_selected_images The images' information.
     *
     * @return array[]
     */
    public function assign_ai_selected_images_to_dummy_products($dummy_products_to_update, $ai_selected_images)
{
}
    /**
     * Generate the product content.
     *
     * @param Connection $ai_connection The AI connection.
     * @param string     $token The JWT token.
     * @param array      $products_information_list The products information list.
     * @param string     $business_description The business description.
     * @param string     $search_term The search term.
     *
     * @return array|int|string|\WP_Error
     */
    public function assign_ai_generated_content_to_dummy_products($ai_connection, $token, $products_information_list, $business_description, $search_term)
{
}
    /**
     * Reset the products content.
     */
    public function reset_products_content()
{
}
}