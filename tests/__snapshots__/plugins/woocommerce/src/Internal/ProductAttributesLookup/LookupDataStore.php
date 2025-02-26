<?php

namespace Automattic\WooCommerce\Internal\ProductAttributesLookup;

/**
 * Data store class for the product attributes lookup table.
 */
class LookupDataStore
{
    const ACTION_NONE = 0;

    const ACTION_INSERT = 1;

    const ACTION_UPDATE_STOCK = 2;

    const ACTION_DELETE = 3;

    /**
     * The lookup table name.
     *
     * @var string
     */
    private $lookup_table_name = null;

    /**
     * True if the optimized database access setting is enabled AND products are stored as custom post types.
     *
     * @var bool
     */
    private bool $optimized_db_access_is_enabled;

    /**
     * Flag indicating if the last lookup table creation operation failed.
     *
     * @var bool
     */
    private bool $last_create_operation_failed = false;

    /**
     * LookupDataStore constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Initialize the hooks used by the class.
     */
    private function init_hooks()
    {
        // stub
    }

    /**
     * Check if optimized database access can be used when creating lookup table entries.
     *
     * @return bool True if optimized database access can be used.
     */
    public function can_use_optimized_db_access()
    {
        // stub
    }

    /**
     * Check if the lookup table exists in the database.
     *
     * @return bool
     */
    public function check_lookup_table_exists()
    {
        // stub
    }

    /**
     * Get the name of the lookup table.
     *
     * @return string
     */
    public function get_lookup_table_name()
    {
        // stub
    }

    /**
     * Check if the last lookup data creation operation failed.
     *
     * @return bool True if the last lookup data creation operation failed.
     */
    public function get_last_create_operation_failed()
    {
        // stub
    }

    /**
     * Insert/update the appropriate lookup table entries for a new or modified product or variation.
     * This must be invoked after a product or a variation is created (including untrashing and duplication)
     * or modified.
     *
     * @param int|\WC_Product $product Product object or product id.
     * @param null|array      $changeset Changes as provided by 'get_changes' method in the product object, null if it's being created.
     */
    public function on_product_changed($product, $changeset = null)
    {
        // stub
    }

    /**
     * Schedule an update of the product attributes lookup table for a given product.
     * If an update for the same action is already scheduled, nothing is done.
     *
     * If the 'woocommerce_attribute_lookup_direct_update' option is set to 'yes',
     * the update is done directly, without scheduling.
     *
     * @param int $product_id The product id to schedule the update for.
     * @param int $action The action to perform, one of the ACTION_ constants.
     */
    private function maybe_schedule_update(int $product_id, int $action)
    {
        // stub
    }

    /**
     * Perform an update of the lookup table for a specific product.
     *
     * @param int $product_id The product id to perform the update for.
     * @param int $action The action to perform, one of the ACTION_ constants.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function run_update_callback(int $product_id, int $action)
    {
        // stub
    }

    /**
     * Determine the type of action to perform depending on the received changeset.
     *
     * @param array|null $changeset The changeset received by on_product_changed.
     * @return int One of the ACTION_ constants.
     */
    private function get_update_action($changeset)
    {
        // stub
    }

    /**
     * Update the stock status of the lookup table entries for a given product.
     *
     * @param \WC_Product $product The product to update the entries for.
     */
    private function update_stock_status_for(WC_Product $product)
    {
        // stub
    }

    /**
     * Delete the lookup table contents related to a given product or variation,
     * if it's a variable product it deletes the information for variations too.
     * This must be invoked after a product or a variation is trashed or deleted.
     *
     * @param int|\WC_Product $product Product object or product id.
     */
    public function on_product_deleted($product)
    {
        // stub
    }

    /**
     * Create the lookup data for a given product, if a variable product is passed
     * the information is created for all of its variations.
     * This method is intended to be called from the data regenerator.
     *
     * @param int|WC_Product $product Product object or id.
     * @param bool           $use_optimized_db_access Use direct database access for data retrieval if possible.
     */
    public function create_data_for_product($product, $use_optimized_db_access = false)
    {
        // stub
    }

    /**
     * Create lookup table data for a given product.
     *
     * @param \WC_Product $product The product to create the data for.
     */
    private function create_data_for(WC_Product $product)
    {
        // stub
    }

    /**
     * Delete all the lookup table entries for a given product,
     * if it's a variable product information for variations is deleted too.
     *
     * @param int $product_id Simple product id, or main/parent product id for variable products.
     */
    private function delete_data_for(int $product_id)
    {
        // stub
    }

    /**
     * Create lookup table entries for a simple (non variable) product.
     * Assumes that no entries exist yet.
     *
     * @param \WC_Product $product The product to create the entries for.
     */
    private function create_data_for_simple_product(WC_Product $product)
    {
        // stub
    }

    /**
     * Create lookup table entries for a variable product.
     * Assumes that no entries exist yet.
     *
     * @param \WC_Product_Variable $product The product to create the entries for.
     */
    private function create_data_for_variable_product(WC_Product_Variable $product)
    {
        // stub
    }

    /**
     * Create all the necessary lookup data for a given variation.
     *
     * @param \WC_Product_Variation $variation The variation to create entries for.
     * @throws \Exception Can't retrieve the details of the parent product.
     */
    private function create_data_for_variation(WC_Product_Variation $variation)
    {
        // stub
    }

    /**
     * Create lookup table entries for a given variation, corresponding to a given taxonomy and a set of term ids.
     *
     * @param \WC_Product_Variation $variation The variation to create entries for.
     * @param string                $taxonomy The taxonomy to create the entries for.
     * @param int                   $main_product_id The parent product id.
     * @param array                 $term_ids The term ids to create entries for.
     * @param array                 $term_ids_by_slug_cache A dictionary of term ids by term slug, as returned by 'get_term_ids_by_slug_cache'.
     */
    private function insert_lookup_table_data_for_variation(WC_Product_Variation $variation, string $taxonomy, int $main_product_id, array $term_ids, array $term_ids_by_slug_cache)
    {
        // stub
    }

    /**
     * Get a cache of term ids by slug for a set of taxonomies, with this format:
     *
     * [
     *   'taxonomy' => [
     *     'slug_1' => id_1,
     *     'slug_2' => id_2,
     *     ...
     *   ], ...
     * ]
     *
     * @param array $taxonomies List of taxonomies to build the cache for.
     * @return array A dictionary of taxonomies => dictionary of term slug => term id.
     */
    private function get_term_ids_by_slug_cache($taxonomies)
    {
        // stub
    }

    /**
     * Get the id of the term that defines a variation for a given taxonomy,
     * or null if there's no such defining id (for variations having "Any <taxonomy>" as the definition)
     *
     * @param \WC_Product_Variation $variation The variation to get the defining term id for.
     * @param string                $taxonomy The taxonomy to get the defining term id for.
     * @param array                 $term_ids_by_slug_cache A term ids by slug as generated by get_term_ids_by_slug_cache.
     * @return int|null The term id, or null if there's no defining id for that taxonomy in that variation.
     */
    private function get_variation_definition_term_id(WC_Product_Variation $variation, string $taxonomy, array $term_ids_by_slug_cache)
    {
        // stub
    }

    /**
     * Get the variations of a given variable product.
     *
     * @param \WC_Product_Variable $product The product to get the variations for.
     * @return array An array of WC_Product_Variation objects.
     */
    private function get_variations_of(WC_Product_Variable $product)
    {
        // stub
    }

    /**
     * Check if a given product is a variable product.
     *
     * @param \WC_Product $product The product to check.
     * @return bool True if it's a variable product, false otherwise.
     */
    private function is_variable_product(WC_Product $product)
    {
        // stub
    }

    /**
     * Check if a given product is a variation.
     *
     * @param \WC_Product $product The product to check.
     * @return bool True if it's a variation, false otherwise.
     */
    private function is_variation(WC_Product $product)
    {
        // stub
    }

    /**
     * Return the list of taxonomies used for variations on a product together with
     * the associated term ids, with the following format:
     *
     * [
     *   'taxonomy_name' =>
     *   [
     *     'term_ids' => [id, id, ...],
     *     'used_for_variations' => true|false
     *   ], ...
     * ]
     *
     * @param \WC_Product $product The product to get the attribute taxonomies for.
     * @return array Information about the attribute taxonomies of the product.
     */
    private function get_attribute_taxonomies(WC_Product $product)
    {
        // stub
    }

    /**
     * Insert one entry in the lookup table.
     *
     * @param int    $product_id The product id.
     * @param int    $product_or_parent_id The product id for non-variable products, the main/parent product id for variations.
     * @param string $taxonomy Taxonomy name.
     * @param int    $term_id Term id.
     * @param bool   $is_variation_attribute True if the taxonomy corresponds to an attribute used to define variations.
     * @param bool   $has_stock True if the product is in stock.
     */
    private function insert_lookup_table_data(int $product_id, int $product_or_parent_id, string $taxonomy, int $term_id, bool $is_variation_attribute, bool $has_stock)
    {
        // stub
    }

    /**
     * Handler for the woocommerce_rest_insert_product hook.
     * Needed to update the lookup table when the REST API batch insert/update endpoints are used.
     *
     * @param \WP_Post         $product The post representing the created or updated product.
     * @param \WP_REST_Request $request The REST request that caused the hook to be fired.
     * @return void
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function on_product_created_or_updated_via_rest_api(WP_Post $product, WP_REST_Request $request): void
    {
        // stub
    }

    /**
     * Tells if a lookup table regeneration is currently in progress.
     *
     * @return bool True if a lookup table regeneration is already in progress.
     */
    public function regeneration_is_in_progress()
    {
        // stub
    }

    /**
     * Set a permanent flag (via option) indicating that the lookup table regeneration is in process.
     */
    public function set_regeneration_in_progress_flag()
    {
        // stub
    }

    /**
     * Remove the flag indicating that the lookup table regeneration is in process.
     */
    public function unset_regeneration_in_progress_flag()
    {
        // stub
    }

    /**
     * Set a flag indicating that the last lookup table regeneration process started was aborted.
     */
    public function set_regeneration_aborted_flag()
    {
        // stub
    }

    /**
     * Remove the flag indicating that the last lookup table regeneration process started was aborted.
     */
    public function unset_regeneration_aborted_flag()
    {
        // stub
    }

    /**
     * Tells if the last lookup table regeneration process started was aborted
     * (via deleting the 'woocommerce_attribute_lookup_regeneration_in_progress' option).
     *
     * @return bool True if the last lookup table regeneration process was aborted.
     */
    public function regeneration_was_aborted(): bool
    {
        // stub
    }

    /**
     * Check if the lookup table contains any entry at all.
     *
     * @return bool True if the table contains entries, false if the table is empty.
     */
    public function lookup_table_has_data(): bool
    {
        // stub
    }

    /**
     * Handler for 'woocommerce_get_sections_products', adds the "Advanced" section to the product settings.
     *
     * @param array $products Original array of settings sections.
     * @return array New array of settings sections.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_advanced_section_to_product_settings(array $products): array
    {
        // stub
    }

    /**
     * Handler for 'woocommerce_get_settings_products', adds the settings related to the product attributes lookup table.
     *
     * @param array  $settings Original settings configuration array.
     * @param string $section_id Settings section identifier.
     * @return array New settings configuration array.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_product_attributes_lookup_table_settings(array $settings, string $section_id): array
    {
        // stub
    }

    /**
     * Check if the optimized database access setting is enabled.
     *
     * @return bool True if the optimized database access setting is enabled.
     */
    public function optimized_data_access_is_enabled()
    {
        // stub
    }

    /**
     * Create the lookup table data for a product or variation using optimized database access.
     * For variable products entries are created for the main product and for all the variations.
     *
     * @param int $product_id Product or variation id.
     */
    private function create_data_for_product_cpt(int $product_id)
    {
        // stub
    }

    /**
     * Core version of create_data_for_product_cpt (doesn't catch exceptions).
     *
     * @param int $product_id Product or variation id.
     * @return void
     * @throws \WC_Data_Exception Wrongly serialized attribute data found, or INSERT statement failed.
     */
    private function create_data_for_product_cpt_core(int $product_id)
    {
        // stub
    }

}

