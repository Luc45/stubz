<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates;

/**
 * Interface for subsection containers, which contain sub-sections and blocks.
 */
interface SubsectionInterface
{
    /**
     * Adds a new block to the sub-section.
     *
     * @param array $block_config block config.
     */
    public function add_block(array $block_config): Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface;
}