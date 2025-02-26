<?php

namespace Automattic\WooCommerce\Internal\ProductAttributesLookup;

/**
 * This class handles the (re)generation of the product attributes lookup table.
 * It schedules the regeneration in small product batches by itself, so it can be used outside the
 * regular WooCommerce data regenerations mechanism.
 *
 * After the regeneration is completed a wp_wc_product_attributes_lookup table will exist with entries for
 * all the products that existed when initiate_regeneration was invoked; entries for products created after that
 * are supposed to be created/updated by the appropriate data store classes (or by the code that uses
 * the data store classes) whenever a product is created/updated.
 *
 * Additionally, after the regeneration is completed a 'woocommerce_attribute_lookup_enabled' option
 * with a value of 'yes' will have been created, thus effectively enabling the table usage
 * (with an exception: if the regeneration was manually aborted via deleting the
 * 'woocommerce_attribute_lookup_regeneration_in_progress' option) the option will be set to 'no'.
 *
 * This class also adds two entries to the Status - Tools menu: one for manually regenerating the table contents,
 * and another one for enabling or disabling the actual lookup table usage.
 */
class DataRegenerator extends \
{
    const PRODUCTS_PER_GENERATION_STEP = 100;

    /**
     * The data store to use.
     *
     * @var LookupDataStore
     */
    private $data_store = null;

    /**
     * The lookup table name.
     *
     * @var string
     */
    private $lookup_table_name = null;

    /**
     * Flag indicating if the last regeneration step failed.
     *
     * @var bool
     */
    private $last_regeneration_step_failed = null;

    /**
     * DataRegenerator constructor.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Class initialization, invoked by the DI container.
     *
     * @internal
     * @param LookupDataStore $data_store The data store to use.
     */
    public final function init(Automattic\WooCommerce\Internal\ProductAttributesLookup\LookupDataStore $data_store)
    {
        // stub
    }

    /**
     * Check if the last regeneration step failed.
     *
     * @return bool True if the last regeneration step failed.
     */
    public function get_last_regeneration_step_failed()
    {
        // stub
    }

    /**
     * Initialize the regeneration procedure:
     * deletes the lookup table and related options if they exist,
     * then it creates the table and runs the first step of the regeneration process.
     *
     * If $in_background is true, regeneration will continue in the background using scheduled actions.
     * If $in_background is false, do_regeneration_step and finalize_regeneration must be invoked explicitly.
     *
     * This method is intended to be used as a callback for a db update in wc-update-functions
     * and in the CLI commands, regeneration triggered from the tools page will use
     * initiate_regeneration_from_tools_page instead.
     *
     * @param bool $in_background True if regeneration will continue in the background using scheduled actions.
     * @return int Highest product id that will be processed.
     */
    public function initiate_regeneration(bool $in_background = true): int
    {
        // stub
    }

    /**
     * Delete all the existing data related to the lookup table, optionally including the table itself.
     *
     * @param bool $truncate_table True to truncate the lookup table too.
     */
    private function delete_all_attributes_lookup_data(bool $truncate_table)
    {
        // stub
    }

    /**
     * Delete all the data from the lookup table.
     */
    public function truncate_lookup_table()
    {
        // stub
    }

    /**
     * Create the lookup table and initialize the options that will be temporarily used
     * while the regeneration is in progress.
     *
     * @return int Id of the last product id that will be processed.
     */
    private function initialize_table_and_data(): int
    {
        // stub
    }

    /**
     * Get the highest existing product id.
     *
     * @return int|null Highest existing product id, or null if no products exist at all.
     */
    private function get_last_existing_product_id(): int|null
    {
        // stub
    }

    /**
     * Action scheduler callback, performs one regeneration step and then
     * schedules the next step if necessary.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function run_regeneration_step_callback()
    {
        // stub
    }

    /**
     * Enqueue one regeneration step in action scheduler.
     */
    private function enqueue_regeneration_step_run()
    {
        // stub
    }

    /**
     * Perform one regeneration step: grabs a chunk of products and creates
     * the appropriate entries for them in the lookup table.
     *
     * @param int|null $step_size How many products to process, by default PRODUCTS_PER_GENERATION_STEP will be used.
     * @param bool     $use_optimized_db_access Use direct database access for data retrieval if possible.
     * @return bool True if more steps need to be run, false otherwise.
     */
    public function do_regeneration_step(int|null $step_size = null, bool $use_optimized_db_access = false)
    {
        // stub
    }

    /**
     * Cleanup/final option setup after the regeneration has been completed.
     *
     * @param bool $enable_usage Whether the table usage should be enabled or not.
     */
    public function finalize_regeneration(bool $enable_usage)
    {
        // stub
    }

    /**
     * Add a 'Regenerate product attributes lookup table' entry to the Status - Tools page.
     *
     * @param array $tools_array The tool definitions array that is passed ro the woocommerce_debug_tools filter.
     * @return array The tools array with the entry added.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_initiate_regeneration_entry_to_tools_array(array $tools_array)
    {
        // stub
    }

    /**
     * Callback to initiate the regeneration process from the Status - Tools page.
     *
     * @throws \Exception The regeneration is already in progress.
     */
    private function initiate_regeneration_from_tools_page()
    {
        // stub
    }

    /**
     * Enable or disable the actual lookup table usage.
     *
     * @param bool $enable True to enable, false to disable.
     * @throws \Exception A lookup table regeneration is currently in progress.
     */
    private function enable_or_disable_lookup_table_usage($enable)
    {
        // stub
    }

    /**
     * Check if everything is good to go to perform a complete or per product lookup table data regeneration
     * and throw an exception if not.
     *
     * @param mixed $product_id The product id to check the regeneration viability for, or null to check if a complete regeneration is possible.
     * @throws \Exception Something prevents the regeneration from starting.
     */
    public function check_can_do_lookup_table_regeneration($product_id = null)
    {
        // stub
    }

    /**
     * Callback to abort the regeneration process from the Status - Tools page or from CLI.
     *
     * @param bool $verify_nonce True to perform nonce verification (needed when running the tool from the tools page).
     * @throws \Exception The lookup table doesn't exist, or there's no regeneration process in progress to abort.
     */
    public function abort_regeneration(bool $verify_nonce)
    {
        // stub
    }

    /**
     * Cancel any existing regeneration step scheduled action.
     */
    public function cancel_regeneration_scheduled_action()
    {
        // stub
    }

    /**
     * Check if any pending regeneration step scheduled action exists.
     *
     * @return bool True if any pending regeneration step scheduled action exists.
     */
    public function has_scheduled_action_for_regeneration_step(): bool
    {
        // stub
    }

    /**
     * Callback to resume the regeneration process from the Status - Tools page or from CLI.
     *
     * @param bool $verify_nonce True to perform nonce verification (needed when running the tool from the tools page).
     * @throws \Exception The lookup table doesn't exist, or a regeneration process is already in place or hasn't been aborted.
     */
    public function resume_regeneration(bool $verify_nonce)
    {
        // stub
    }

    /**
     * Verify the validity of the nonce received when executing a tool from the Status - Tools page.
     *
     * @throws \Exception Missing or invalid nonce received.
     */
    private function verify_tool_execution_nonce()
    {
        // stub
    }

    /**
     * Get the name of the product attributes lookup table.
     *
     * @return string
     */
    public function get_lookup_table_name()
    {
        // stub
    }

    /**
     * Get the SQL statement that creates the product attributes lookup table, including the indices.
     *
     * @return string
     */
    public function get_table_creation_sql()
    {
        // stub
    }

    /**
     * Create the primary key for the table if it doesn't exist already.
     * It also deletes the product_or_parent_id_term_id index if it exists, since it's now redundant.
     *
     * @return void
     */
    public function create_table_primary_index()
    {
        // stub
    }

    /**
     * Run additional setup needed after a WooCommerce install or update finishes.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function run_woocommerce_installed_callback()
    {
        // stub
    }

}

