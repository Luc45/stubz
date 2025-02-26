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
     * Shipping methods.
     *
     * @var array $methods Shipping methods.
     */
    private array $methods;

    /**
     * Shipping locations.
     *
     * @var array $locations Shipping locations.
     */
    private array $locations;

    /**
     * Shipping zones.
     *
     * @var array $zones Shipping zones.
     */
    private array $zones;

    /**
     * Shipping terms.
     *
     * @var array $terms Shipping terms.
     */
    private array $terms;

    /**
     * Shipping classes.
     *
     * @var array $classes Shipping classes.
     */
    private array $classes;

    /**
     * Local pickup settings.
     *
     * @var array $local_pickup Local pickup settings.
     */
    private array $local_pickup;

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
        // stub
    }

    /**
     * Prepare the JSON array for the step.
     *
     * @return array The JSON array.
     */
    public function prepare_json_array(): array
    {
        // stub
    }

    /**
     * Get the name of the step.
     *
     * @return string
     */
    public static function get_step_name(): string
    {
        // stub
    }

    /**
     * Get the schema for the step.
     *
     * @param int $version Optional version number of the schema.
     * @return array The schema array.
     */
    public static function get_schema($version = 1): array
    {
        // stub
    }

}

