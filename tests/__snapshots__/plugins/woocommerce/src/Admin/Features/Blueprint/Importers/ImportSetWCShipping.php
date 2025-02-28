<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Importers;

/**
 * Class ImportSetWCShipping
 *
 * This class imports WooCommerce shipping settings and implements the StepProcessor interface.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint\Importers
 */
class ImportSetWCShipping implements \Automattic\WooCommerce\Blueprint\StepProcessor
{
    /**
     * Process the import of WooCommerce shipping settings.
     *
     * @param object $schema The schema object containing import details.
     * @return StepProcessorResult
     */
    public function process($schema): Automattic\WooCommerce\Blueprint\StepProcessorResult
{
}
    /**
     * Filter shipping methods data.
     *
     * @param array $methods The shipping methods.
     *
     * @return mixed
     */
    protected function filter_shipping_methods_data($methods)
{
}
    /**
     * Post process shipping methods.
     *
     * @param array $methods The shipping methods.
     *
     * @return void
     */
    protected function post_process_shipping_methods($methods)
{
}
    /**
     * Insert data into the specified table.
     *
     * @param string $table The table name.
     * @param array  $format The data format.
     * @param array  $rows The rows to insert.
     * @global \wpdb $wpdb WordPress database abstraction object.
     * @return array The IDs of the inserted rows.
     */
    protected function insert($table, $format, $rows)
{
}
    /**
     * Get the class name for the step.
     *
     * @return string
     */
    public function get_step_class(): string
{
}
}