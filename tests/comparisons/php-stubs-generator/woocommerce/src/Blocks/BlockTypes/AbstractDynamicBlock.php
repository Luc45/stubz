<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AbstractDynamicBlock class.
 */
abstract class AbstractDynamicBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return null
     */
    protected function get_block_type_script($key = null)
    {
    }
    /**
     * Get block attributes.
     *
     * @return array
     */
    protected function get_block_type_attributes()
    {
    }
    /**
     * Get the schema for the alignment property.
     *
     * @return array Property definition for align.
     */
    protected function get_schema_align()
    {
    }
    /**
     * Get the schema for a list of IDs.
     *
     * @return array Property definition for a list of numeric ids.
     */
    protected function get_schema_list_ids()
    {
    }
    /**
     * Get the schema for a boolean value.
     *
     * @param  string $default  The default value.
     * @return array Property definition.
     */
    protected function get_schema_boolean($default = true)
    {
    }
    /**
     * Get the schema for a numeric value.
     *
     * @param  string $default  The default value.
     * @return array Property definition.
     */
    protected function get_schema_number($default)
    {
    }
    /**
     * Get the schema for a string value.
     *
     * @param  string $default  The default value.
     * @return array Property definition.
     */
    protected function get_schema_string($default = '')
    {
    }
}