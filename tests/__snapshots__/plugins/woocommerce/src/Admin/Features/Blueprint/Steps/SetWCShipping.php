<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Steps;

/**
 * Class SetWCShipping
 *
 * This class sets WooCommerce shipping settings and extends the Step class.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint\Steps
 */
class SetWCShipping extends \Automattic\WooCommerce\Blueprint\Steps\Step
{
    /**
     * Constructor.
     *
     * @param array $methods Shipping methods.
     * @param array $locations Shipping locations.
     * @param array $zones Shipping zones.
     * @param array $terms Shipping terms.
     * @param array $classes Shipping classes.
     * @param array $local_pickup Local pickup settings.
     */
    public function __construct(array $methods, array $locations, array $zones, array $terms, array $classes, array $local_pickup)
{
}
    /**
     * Prepare the JSON array for the step.
     *
     * @return array The JSON array.
     */
    public function prepare_json_array(): array
{
}
    /**
     * Get the name of the step.
     *
     * @return string
     */
    public static function get_step_name(): string
{
}
    /**
     * Get the schema for the step.
     *
     * @param int $version Optional version number of the schema.
     * @return array The schema array.
     */
    public static function get_schema($version = 1): array
{
}
}