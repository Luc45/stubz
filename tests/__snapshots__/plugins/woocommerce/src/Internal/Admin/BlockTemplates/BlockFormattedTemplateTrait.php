<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Trait for block formatted template.
 */
trait BlockFormattedTemplateTrait
{
    /**
     * Get the block configuration as a formatted template.
     *
     * @return array The block configuration as a formatted template.
     */
    public function get_formatted_template(): array
    {
        // stub
    }

    /**
     * Get the block hide conditions formatted for inclusion in a formatted template.
     */
    private function get_formatted_hide_conditions(): array
    {
        // stub
    }

    /**
     * Get the block disable conditions formatted for inclusion in a formatted template.
     */
    private function get_formatted_disable_conditions(): array
    {
        // stub
    }

    /**
     * Formats conditions in the expected format to include in the template.
     *
     * @param array $conditions The conditions to format.
     */
    private function format_conditions($conditions): array
    {
        // stub
    }

}