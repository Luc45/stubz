<?php

namespace Automattic\WooCommerce\Internal\ProductAttributesLookup;

/**
 * Data store class for the product attributes lookup table.
 */
class LookupDataStore
{
    public const ACTION_NONE = 0;
    public const ACTION_INSERT = 1;
    public const ACTION_UPDATE_STOCK = 2;
    public const ACTION_DELETE = 3;
    /**
     * LookupDataStore constructor.
     */
    public function __construct()
{
}
    /**
     * Check if optimized database access can be used when creating lookup table entries.
     *
     * @return bool True if optimized database access can be used.
     */
    public function can_use_optimized_db_access()
{
}
    /**
     * Check if the lookup table exists in the database.
     *
     * @return bool
     */
    public function check_lookup_table_exists()
{
}
    /**
     * Get the name of the lookup table.
     *
     * @return string
     */
    public function get_lookup_table_name()
{
}
    /**
     * Check if the last lookup data creation operation failed.
     *
     * @return bool True if the last lookup data creation operation failed.
     */
    public function get_last_create_operation_failed()
{
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
}
    /**
     * Tells if a lookup table regeneration is currently in progress.
     *
     * @return bool True if a lookup table regeneration is already in progress.
     */
    public function regeneration_is_in_progress()
{
}
    /**
     * Set a permanent flag (via option) indicating that the lookup table regeneration is in process.
     */
    public function set_regeneration_in_progress_flag()
{
}
    /**
     * Remove the flag indicating that the lookup table regeneration is in process.
     */
    public function unset_regeneration_in_progress_flag()
{
}
    /**
     * Set a flag indicating that the last lookup table regeneration process started was aborted.
     */
    public function set_regeneration_aborted_flag()
{
}
    /**
     * Remove the flag indicating that the last lookup table regeneration process started was aborted.
     */
    public function unset_regeneration_aborted_flag()
{
}
    /**
     * Tells if the last lookup table regeneration process started was aborted
     * (via deleting the 'woocommerce_attribute_lookup_regeneration_in_progress' option).
     *
     * @return bool True if the last lookup table regeneration process was aborted.
     */
    public function regeneration_was_aborted(): bool
{
}
    /**
     * Check if the lookup table contains any entry at all.
     *
     * @return bool True if the table contains entries, false if the table is empty.
     */
    public function lookup_table_has_data(): bool
{
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
}
    /**
     * Check if the optimized database access setting is enabled.
     *
     * @return bool True if the optimized database access setting is enabled.
     */
    public function optimized_data_access_is_enabled()
{
}
}