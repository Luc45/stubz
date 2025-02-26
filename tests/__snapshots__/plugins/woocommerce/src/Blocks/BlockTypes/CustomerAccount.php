<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CustomerAccount class.
 */
class CustomerAccount extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    const TEXT_ONLY = 'text_only';

    const ICON_ONLY = 'icon_only';

    const DISPLAY_ALT = 'alt';

    const DISPLAY_LINE = 'line';

    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'customer-account';

    /**
     * Block Hook API placements.
     *
     * @var array
     */
    protected $hooked_block_placements = array(
  0 => 
  array(
    'position' => 'after',
    'anchor' => 'core/navigation',
    'area' => 'header',
    'callback' => 'should_unhook_block',
    'version' => '8.4.0',
  ),
);

    /**
     * Initialize this block type.
     */
    protected function initialize()
    {
        // stub
    }

    /**
     * Callback for the Block Hooks API to modify the attributes of the hooked block.
     *
     * @param array|null                      $parsed_hooked_block The parsed block array for the given hooked block type, or null to suppress the block.
     * @param string                          $hooked_block_type   The hooked block type name.
     * @param string                          $relative_position   The relative position of the hooked block.
     * @param array                           $parsed_anchor_block The anchor block, in parsed block array format.
     * @param WP_Block_Template|WP_Post|array $context             The block template, template part, `wp_navigation` post type,
     *                                                             or pattern that the anchor block belongs to.
     * @return array|null
     */
    public function modify_hooked_block_attributes($parsed_hooked_block, $hooked_block_type, $relative_position, $parsed_anchor_block, $context)
    {
        // stub
    }

    /**
     * Callback for the Block Hooks API to determine if the block should be auto-inserted.
     *
     * @param array                             $hooked_blocks An array of block slugs hooked into a given context.
     * @param string                            $position      Position of the block insertion point.
     * @param string                            $anchor_block  The block acting as the anchor for the inserted block.
     * @param array|\WP_Post|\WP_Block_Template $context       Where the block is embedded.
     *
     * @return array
     */
    protected function should_unhook_block($hooked_blocks, $position, $anchor_block, $context)
    {
        // stub
    }

    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string Rendered block output.
     */
    protected function render($attributes, $content, $block)
    {
        // stub
    }

    /**
     * Gets the icon to render depending on the iconStyle and displayStyle.
     *
     * @param array $attributes Block attributes.
     *
     * @return string Label to render on the block
     */
    private function render_icon($attributes)
    {
        // stub
    }

    /**
     * Gets the label to render depending on the displayStyle.
     *
     * @return string Label to render on the block.
     */
    private function render_label()
    {
        // stub
    }

    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     *
     * @return null This block has no frontend script.
     */
    protected function get_block_type_script($key = null)
    {
        // stub
    }

}

