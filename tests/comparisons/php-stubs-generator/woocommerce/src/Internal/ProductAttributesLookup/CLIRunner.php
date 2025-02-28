<?php

namespace Automattic\WooCommerce\Internal\ProductAttributesLookup;

/**
 * Command line tools to handle the regeneration of the product aatributes lookup table.
 */
class CLIRunner
{
    /**
     * Creates a new instance of the class.
     *
     * Normally we define a public 'init' method with the class dependencies passed as arguments
     * and then the DI container executes it, but if we do that a dummy command will be created
     * for that method. Therefore, in this case we retrieve the dependencies manually instead.
     */
    public function __construct()
    {
    }
    // phpcs:disable Generic.CodeAnalysis.UnusedFunctionParameter.FoundAfterLastUsed
    /**
     * Enable the usage of the product attributes lookup table.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function enable(array $args = array(), array $assoc_args = array())
    {
    }
    /**
     * Disable the usage of the product attributes lookup table.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function disable(array $args = array(), array $assoc_args = array())
    {
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
    public function regenerate_for_product(array $args = array(), array $assoc_args = array())
    {
    }
    /**
     * Obtain information about the product attributes lookup table.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function info(array $args = array(), array $assoc_args = array())
    {
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
    public function abort_regeneration(array $args = array(), array $assoc_args = array())
    {
    }
    /**
     * Resume the background regeneration of the product attributes lookup table after it has been aborted.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function resume_regeneration(array $args = array(), array $assoc_args = array())
    {
    }
    /**
     * Delete the temporary data used during the regeneration of the product attributes lookup table. This data is normally deleted automatically after the regeneration process finishes.
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function cleanup_regeneration_progress(array $args = array(), array $assoc_args = array())
    {
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
    public function initiate_regeneration(array $args = array(), array $assoc_args = array())
    {
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
    public function regenerate(array $args = array(), array $assoc_args = array())
    {
    }
}