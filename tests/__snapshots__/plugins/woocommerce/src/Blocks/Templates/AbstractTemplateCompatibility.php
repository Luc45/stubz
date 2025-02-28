<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * AbstractTemplateCompatibility class.
 *
 * To bridge the gap on compatibility with PHP hooks and blockified templates.
 *
 * @internal
 */
abstract class AbstractTemplateCompatibility
{
    /**
     * The data of supported hooks, containing the hook name, the block name,
     * position, and the callbacks.
     *
     * @var array $hook_data The hook data.
     */
    protected $hook_data = null;
    /**
     * Initialization method.
     */
    public function init()
{
}
    /**
     * Update the render block data to inject our custom attribute needed to
     * determine which blocks belong to an inherited Products block.
     *
     * @param array         $parsed_block The block being rendered.
     * @param array         $source_block An un-modified copy of $parsed_block, as it appeared in the source content.
     * @param WP_Block|null $parent_block If this is a nested block, a reference to the parent block.
     *
     * @return array
     */
    abstract public function update_render_block_data($parsed_block, $source_block, $parent_block);
    /**
     * Inject hooks to rendered content of corresponding blocks.
     *
     * @param mixed $block_content The rendered block content.
     * @param mixed $block         The parsed block data.
     * @return string
     */
    abstract public function inject_hooks($block_content, $block);
    /**
     * The hook data to inject to the rendered content of blocks. This also
     * contains hooked functions that will be removed by remove_default_hooks.
     *
     * The array format:
     * [
     *   <hook-name> => [
     *     block_names => [ <block-name>, ... ],
     *     position => before|after,
     *     hooked => [
     *       <function-name> => <priority>,
     *        ...
     *     ],
     *  ],
     * ]
     * Where:
     * - hook-name is the name of the hook that will be replaced.
     * - block-names is the array block names that hook will be attached to.
     * - position is the position of the block relative to the hook.
     * - hooked is an array of functions hooked to the hook that will be
     *   replaced. The key is the function name and the value is the
     *   priority.
     */
    abstract protected function set_hook_data();
    /**
     * Remove the default callback added by WooCommerce. We replaced these
     * callbacks by blocks so we have to remove them to prevent duplicated
     * content.
     */
    protected function remove_default_hooks()
{
}
    /**
     * Get the buffer content of the hooks to append/prepend to render content.
     *
     * @param array  $hooks    The hooks to be rendered.
     * @param string $position The position of the hooks.
     *
     * @return string
     */
    protected function get_hooks_buffer($hooks, $position)
{
}
}