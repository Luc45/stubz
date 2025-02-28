<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Exporters;

/**
 * Class ExportWCTaskOptions
 *
 * This class exports WooCommerce task options and implements the StepExporter and HasAlias interfaces.
 *
 * @package Automattic\WooCommerce\Admin\Features\Blueprint\Exporters
 */
class ExportWCTaskOptions implements \Automattic\WooCommerce\Blueprint\Exporters\StepExporter, \Automattic\WooCommerce\Blueprint\Exporters\HasAlias
{
    use \Automattic\WooCommerce\Blueprint\UseWPFunctions;
    /**
     * Export WooCommerce task options.
     *
     * @return SetSiteOptions
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
    /**
     * Get the alias for this exporter.
     *
     * @return string
     */
    public function get_alias()
    {
    }
}