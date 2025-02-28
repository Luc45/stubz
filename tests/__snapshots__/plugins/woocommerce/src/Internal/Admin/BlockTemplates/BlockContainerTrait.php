<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Trait for block containers.
 */
trait BlockContainerTrait
{
    /**
     * Add a block to the block container.
     *
     * @param BlockInterface $block The block.
     *
     * @throws \ValueError If the block configuration is invalid.
     * @throws \ValueError If a block with the specified ID already exists in the template.
     * @throws \UnexpectedValueException If the block container is not the parent of the block.
     * @throws \UnexpectedValueException If the block container's root template is not the same as the block's root template.
     */
    protected function add_inner_block(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block): Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface
{
}
    /**
     * Get a block by ID.
     *
     * @param string $block_id The block ID.
     */
    public function get_block(string $block_id): Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface|null
{
}
    /**
     * Remove a block from the block container.
     *
     * @param string $block_id The block ID.
     *
     * @throws \UnexpectedValueException If the block container is not an ancestor of the block.
     */
    public function remove_block(string $block_id)
{
}
    /**
     * Remove all blocks from the block container.
     */
    public function remove_blocks()
{
}
    /**
     * Remove a block from the block container's inner blocks. This is an internal method and should not be called directly
     * except for from the BlockContainerTrait's remove_block() method.
     *
     * @param BlockInterface $block The block.
     */
    public function remove_inner_block(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
{
}
    /**
     * Get the inner blocks as a formatted template.
     */
    public function get_formatted_template(): array
{
}
}