<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Exporters;

/**
 * Class ExportWCShipping
 *
 * This class exports WooCommerce shipping settings and implements the StepExporter interface.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint\Exporters
 */
class ExportWCShipping implements \Automattic\WooCommerce\Blueprint\Exporters\StepExporter
{
    /**
     * Export WooCommerce shipping settings.
     *
     * @return SetWCShipping
     */
    public function export()
    {
    }
    /**
     * Get the name of the step.
     *
     * @return string
     */
    public function get_step_name()
    {
    }
}