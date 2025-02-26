<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Trait for block containers.
 */
trait BlockContainerTrait
{
    /**
     * The inner blocks.
     *
     * @var BlockInterface[]
     */
    private $inner_blocks = array(
);

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
        // stub
    }

    /**
     * Checks if a block is a descendant of the block container.
     *
     * @param BlockInterface $block The block.
     */
    private function is_block_descendant(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block): bool
    {
        // stub
    }

    /**
     * Get a block by ID.
     *
     * @param string $block_id The block ID.
     */
    public function get_block(string $block_id): Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface|null
    {
        // stub
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
        // stub
    }

    /**
     * Remove all blocks from the block container.
     */
    public function remove_blocks()
    {
        // stub
    }

    /**
     * Remove a block from the block container's inner blocks. This is an internal method and should not be called directly
     * except for from the BlockContainerTrait's remove_block() method.
     *
     * @param BlockInterface $block The block.
     */
    public function remove_inner_block(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
    {
        // stub
    }

    /**
     * Get the inner blocks sorted by order.
     */
    private function get_inner_blocks_sorted_by_order(): array
    {
        // stub
    }

    /**
     * Get the inner blocks as a formatted template.
     */
    public function get_formatted_template(): array
    {
        // stub
    }

    /**
     * Do the `woocommerce_block_template_after_add_block` action.
     * Handle exceptions thrown by the action.
     *
     * @param BlockInterface $block The block.
     */
    private function do_after_add_block_action(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
    {
        // stub
    }

    /**
     * Do the `woocommerce_block_template_area_{template_area}_after_add_block_{block_id}` action.
     * Handle exceptions thrown by the action.
     *
     * @param BlockInterface $block The block.
     */
    private function do_after_add_specific_block_action(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
    {
        // stub
    }

    /**
     * Do the `woocommerce_block_after_add_block_error` action.
     *
     * @param BlockInterface $block The block.
     * @param string         $action The action that threw the exception.
     * @param \Exception     $e The exception.
     */
    private function do_after_add_block_error_action(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block, string $action, Exception $e)
    {
        // stub
    }

    /**
     * Do the `woocommerce_block_template_after_remove_block` action.
     * Handle exceptions thrown by the action.
     *
     * @param BlockInterface $block The block.
     */
    private function do_after_remove_block_action(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
    {
        // stub
    }

    /**
     * Do the `woocommerce_block_template_area_{template_area}_after_remove_block_{block_id}` action.
     * Handle exceptions thrown by the action.
     *
     * @param BlockInterface $block The block.
     */
    private function do_after_remove_specific_block_action(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
    {
        // stub
    }

    /**
     * Do the `woocommerce_block_after_remove_block_error` action.
     *
     * @param BlockInterface $block The block.
     * @param string         $action The action that threw the exception.
     * @param \Exception     $e The exception.
     */
    private function do_after_remove_block_error_action(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block, string $action, Exception $e)
    {
        // stub
    }

}

