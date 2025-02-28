<?php

namespace Automattic\WooCommerce\Admin\BlockTemplates;

/**
 * Interface for block containers.
 */
interface ContainerInterface
{
    /**
     * Get the root template that the block belongs to.
     */
    public function get_root_template(): Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface;
    /**
     * Get the block configuration as a formatted template.
     */
    public function get_formatted_template(): array;
    /**
     * Get a block by ID.
     *
     * @param string $block_id The block ID.
     */
    public function get_block(string $block_id): Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface|null;
    /**
     * Removes a block from the container.
     *
     * @param string $block_id The block ID.
     *
     * @throws \UnexpectedValueException If the block container is not an ancestor of the block.
     */
    public function remove_block(string $block_id);
    /**
     * Removes all blocks from the container.
     */
    public function remove_blocks();
}