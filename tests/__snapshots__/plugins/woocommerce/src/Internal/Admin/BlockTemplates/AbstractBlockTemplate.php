<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Block template class.
 */
abstract class AbstractBlockTemplate extends \
{
    /**
     * The block cache.
     *
     * @var BlockInterface[]
     */
    private $block_cache = array(
);

    /**
     * Get the template ID.
     */
    public abstract function get_id(): string;

    /**
     * Get the template title.
     */
    public function get_title(): string
    {
        // stub
    }

    /**
     * Get the template description.
     */
    public function get_description(): string
    {
        // stub
    }

    /**
     * Get the template area.
     */
    public function get_area(): string
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
     * Caches a block in the template. This is an internal method and should not be called directly
     * except for from the BlockContainerTrait's add_inner_block() method.
     *
     * @param BlockInterface $block The block to cache.
     *
     * @throws \ValueError If a block with the specified ID already exists in the template.
     * @throws \ValueError If the block template that the block belongs to is not this template.
     *
     * @ignore
     */
    public function cache_block(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface &$block)
    {
        // stub
    }

    /**
     * Uncaches a block in the template. This is an internal method and should not be called directly
     * except for from the BlockContainerTrait's remove_block() method.
     *
     * @param string $block_id The block ID.
     *
     * @ignore
     */
    public function uncache_block(string $block_id)
    {
        // stub
    }

    /**
     * Generate a block ID based on a base.
     *
     * @param string $id_base The base to use when generating an ID.
     * @return string
     */
    public function generate_block_id(string $id_base): string
    {
        // stub
    }

    /**
     * Get the root template.
     */
    public function get_root_template(): Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface
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
     * Get the template as JSON like array.
     *
     * @return array The JSON.
     */
    public function to_json(): array
    {
        // stub
    }

}

