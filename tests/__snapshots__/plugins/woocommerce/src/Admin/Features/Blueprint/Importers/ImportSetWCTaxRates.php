<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Importers;

/**
 * Class ImportSetWCTaxRates
 *
 * This class imports WooCommerce tax rates and implements the StepProcessor interface.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint\Importers
 */
class ImportSetWCTaxRates
{
    /**
     * The result of the step processing.
     *
     * @var StepProcessorResult $result The result of the step processing.
     */
    private Automattic\WooCommerce\Blueprint\StepProcessorResult $result;

    /**
     * Process the import of WooCommerce tax rates.
     *
     * @param object $schema The schema object containing import details.
     * @return StepProcessorResult
     */
    public function process($schema): Automattic\WooCommerce\Blueprint\StepProcessorResult
    {
        // stub
    }

    /**
     * Check if a tax rate exists in the database.
     *
     * @param int $id The tax rate ID.
     * @global \wpdb $wpdb WordPress database abstraction object.
     * @return array|null The tax rate row if found, null otherwise.
     */
    protected function exist($id)
    {
        // stub
    }

    /**
     * Add a tax rate to the database.
     *
     * @param object $rate The tax rate object.
     * @return int|false The tax rate ID if successfully added, false otherwise.
     */
    protected function add_rate($rate)
    {
        // stub
    }

    /**
     * Add a tax rate location to the database.
     *
     * @param object $location The location object.
     * @global \wpdb $wpdb WordPress database abstraction object.
     */
    public function add_location($location)
    {
        // stub
    }

    /**
     * Get the class name for the step.
     *
     * @return string
     */
    public function get_step_class(): string
    {
        // stub
    }

}

