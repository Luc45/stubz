<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates;

/**
 * Interface for section containers, which contain sub-sections and blocks.
 */
interface SectionInterface
{
    /**
     * Adds a new sub-section to the section.
     *
     * @param array $block_config block config.
     * @return SubsectionInterface new block sub-section.
     */
    public function add_subsection(array $block_config): Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\SubsectionInterface;

    /**
     * Adds a new block to the section.
     *
     * @param array $block_config block config.
     */
    public function add_block(array $block_config): Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface;

    /**
     * Adds a new sub-section to the section.
     *
     * @deprecated 8.6.0
     *
     * @param array $block_config The block data.
     */
    public function add_section(array $block_config): Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\SubsectionInterface;

}