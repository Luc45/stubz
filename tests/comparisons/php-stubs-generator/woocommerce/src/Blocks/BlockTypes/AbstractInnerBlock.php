<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * AbstractInnerBlock class.
 */
abstract class AbstractInnerBlock extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Is this inner block lazy loaded? this helps us know if we should load its frontend script ot not.
     *
     * @var boolean
     */
    protected $is_lazy_loaded = true;
    /**
     * Registers the block type with WordPress using the metadata file.
     *
     * The registration using metadata is now recommended. And it's required for "Inner Blocks" to
     * fix the issue of missing translations in the inspector (in the Editor mode)
     */
    protected function register_block_type()
    {
    }
    /**
     * For lazy loaded inner blocks, we don't want to enqueue the script but rather leave it for webpack to do that.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string|null
     */
    protected function get_block_type_script($key = null)
    {
    }
    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
    {
    }
}