<?php

namespace Automattic\WooCommerce\Internal\ProductAttributesLookup;

/**
 * Command line tools to handle the regeneration of the product aatributes lookup table.
 */
class CLIRunner
{
    /**
     * The instance of DataRegenerator to use.
     *
     * @var DataRegenerator
     */
    private Automattic\WooCommerce\Internal\ProductAttributesLookup\DataRegenerator $data_regenerator;

    /**
     * The instance of DataRegenerator to use.
     *
     * @var LookupDataStore
     */
    private Automattic\WooCommerce\Internal\ProductAttributesLookup\LookupDataStore $lookup_data_store;

    /**
     * Creates a new instance of the class.
     *
     * Normally we define a public 'init' method with the class dependencies passed as arguments
     * and then the DI container executes it, but if we do that a dummy command will be created
     * for that method. Therefore, in this case we retrieve the dependencies manually instead.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Enable the usage of the product attributes lookup table.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function enable(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * Core method for the "enable" command.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    private function enable_core(array $args, array $assoc_args)
    {
        // stub
    }

    /**
     * Disable the usage of the product attributes lookup table.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function disable(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * Core method for the "disable" command.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    private function disable_core(array $args, array $assoc_args)
    {
        // stub
    }

    /**
     * Regenerate the product attributes lookup table data for one single product.
     *
     * ## OPTIONS
     *
     * <product-id>
     * : The id of the product for which the data will be regenerated.
     *
     * [--disable-db-optimization]
     * : Don't use optimized database access even if products are stored as custom post types.
     *
     * ## EXAMPLES
     *
     *     wp wc palt regenerate_for_product 34 --disable-db-optimization
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function regenerate_for_product(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * Core method for the "regenerate_for_product" command.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    private function regenerate_for_product_core(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * If database access optimization is requested but can't be used, show a warning.
     *
     * @param bool $use_db_optimization True if database access optimization is requested.
     */
    private function check_can_use_db_optimization(bool $use_db_optimization)
    {
        // stub
    }

    /**
     * Obtain information about the product attributes lookup table.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function info(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * Core method for the "info" command.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    private function info_core(array $args, array $assoc_args)
    {
        // stub
    }

    /**
     * Abort the background regeneration of the product attributes lookup table that is happening in the background.
     *
     * [--cleanup]
     * : Also cleanup temporary data (so regeneration can't be resumed, but it can be restarted).
     *
     *  ## EXAMPLES
     *
     *      wp wc palt abort_regeneration --cleanup
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function abort_regeneration(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * Core method for the "abort_regeneration" command.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    private function abort_regeneration_core(array $args, array $assoc_args)
    {
        // stub
    }

    /**
     * Resume the background regeneration of the product attributes lookup table after it has been aborted.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function resume_regeneration(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * Core method for the "resume_regeneration" command.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    private function resume_regeneration_core(array $args, array $assoc_args)
    {
        // stub
    }

    /**
     * Delete the temporary data used during the regeneration of the product attributes lookup table. This data is normally deleted automatically after the regeneration process finishes.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function cleanup_regeneration_progress(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * Core method for the "cleanup_regeneration_progress" command.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    private function cleanup_regeneration_progress_core(array $args, array $assoc_args)
    {
        // stub
    }

    /**
     * Initiate the background regeneration of the product attributes lookup table. The regeneration will happen in the background, using scheduled actions.
     *
     * ## OPTIONS
     *
     * [--force]
     * : Don't prompt for confirmation if the product attributes lookup table isn't empty.
     *
     *   ## EXAMPLES
     *
     *       wp wc palt initiate_regeneration --force
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function initiate_regeneration(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * Core method for the "initiate_regeneration" command.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    private function initiate_regeneration_core(array $args, array $assoc_args)
    {
        // stub
    }

    /**
     * Regenerate the product attributes lookup table immediately, without using scheduled tasks.
     *
     * ## OPTIONS
     *
     * [--force]
     * : Don't prompt for confirmation if the product attributes lookup table isn't empty.
     *
     * [--from-scratch]
     * : Start table regeneration from scratch even if a regeneration is already in progress.
     *
     * [--disable-db-optimization]
     * : Don't use optimized database access even if products are stored as custom post types.
     *
     * [--batch-size=<size>]
     * : How many products to process in each iteration of the loop.
     * ---
     * default: 10
     * ---
     *
     * ## EXAMPLES
     *
     *     wp wc palt regenerate --force --from-scratch --batch-size=20
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function regenerate(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * Core method for the "regenerate" command.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     * @throws \Exception Invalid batch size argument.
     */
    private function regenerate_core(array $args = array (
), array $assoc_args = array (
))
    {
        // stub
    }

    /**
     * Get information about the product attributes lookup table.
     *
     * @return array Array containing the 'total_rows' and 'products_count' keys.
     */
    private function get_lookup_table_info(): array
    {
        // stub
    }

    /**
     * Invoke a method from the class, and if an exception is thrown, show it using WP_CLI::error.
     *
     * @param string $method_name Name of the method to invoke.
     * @param array  $args Positional arguments to pass to the method.
     * @param array  $assoc_args Associative arguments to pass to the method.
     * @return mixed Result from the method, or 1 if an exception is thrown.
     */
    private function invoke(string $method_name, array $args, array $assoc_args)
    {
        // stub
    }

    /**
     * Show a log message using the WP_CLI text colorization feature.
     *
     * @param string $text Text to show.
     */
    private function log(string $text)
    {
        // stub
    }

    /**
     * Show a warning message using the WP_CLI text colorization feature.
     *
     * @param string $text Text to show.
     */
    private function warning(string $text)
    {
        // stub
    }

    /**
     * Show a success message using the WP_CLI text colorization feature.
     *
     * @param string $text Text to show.
     */
    private function success(string $text)
    {
        // stub
    }

    /**
     * Show an error message using the WP_CLI text colorization feature.
     *
     * @param string $text Text to show.
     */
    private function error(string $text)
    {
        // stub
    }

}

