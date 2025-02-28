<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Block template class.
 */
class BlockTemplate
{
    /**
     * Get the template ID.
     */
    public function get_id(): string
{
}
    /**
     * Add an inner block to this template.
     *
     * @param array $block_config The block data.
     */
    public function add_block(array $block_config): Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface
{
}
}