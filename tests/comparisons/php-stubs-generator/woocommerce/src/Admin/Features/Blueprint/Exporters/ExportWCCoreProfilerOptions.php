<?php

namespace Automattic\WooCommerce\Admin\Features\Blueprint\Exporters;

/**
 * ExportWCCoreProfilerOptions class
 */
class ExportWCCoreProfilerOptions implements \Automattic\WooCommerce\Blueprint\Exporters\StepExporter, \Automattic\WooCommerce\Blueprint\Exporters\HasAlias
{
    use \Automattic\WooCommerce\Blueprint\UseWPFunctions;
    /**
     * Export the step
     *
     * @return SetSiteOptions
     */
    public function export()
    {
    }
    /**
     * Get the step name
     *
     * @return string
     */
    public function get_step_name()
    {
    }
    /**
     * Get the alias
     *
     * @return string
     */
    public function get_alias()
    {
    }
}