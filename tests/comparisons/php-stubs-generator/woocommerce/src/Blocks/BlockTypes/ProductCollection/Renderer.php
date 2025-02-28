<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\ProductCollection;

/**
 * Renderer class.
 * Handles rendering of the block and adds interactivity.
 */
class Renderer
{
    /**
     * The Block with its attributes before it gets rendered
     *
     * @var array
     */
    protected $parsed_block;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Set the parsed block.
     *
     * @param array $block The block to be parsed.
     */
    public function set_parsed_block($block)
    {
    }
    /**
     * Handle the rendering of the block.
     *
     * @param string $block_content The block content about to be rendered.
     * @param array  $block The block being rendered.
     *
     * @return string
     */
    public function handle_rendering($block_content, $block)
    {
    }
    /**
     * Enhances the Product Collection block with client-side pagination.
     *
     * This function identifies Product Collection blocks and adds necessary data attributes
     * to enable client-side navigation and animation effects. It also enqueues the Interactivity API runtime.
     *
     * @param string $block_content The HTML content of the block.
     * @param array  $block         Block details, including its attributes.
     *
     * @return string Updated block content with added interactivity attributes.
     */
    public function enhance_product_collection_with_interactivity($block_content, $block)
    {
    }
    /**
     * Get the styles for the list element (fixed width).
     *
     * @param string $fixed_width Fixed width value.
     * @return string
     */
    protected function get_list_styles($fixed_width)
    {
    }
    /**
     * Add interactive links to all anchors inside the Query Pagination block.
     * This enabled client-side navigation for the product collection block.
     *
     * @param string    $block_content The block content.
     * @param array     $block         The full block, including name and attributes.
     * @param \WP_Block $instance      The block instance.
     */
    public function add_navigation_link_directives($block_content, $block, $instance)
    {
    }
    /**
     * Provides the location context to each inner block of the product collection block.
     * Hint: Only blocks using the 'query' context will be affected.
     *
     * The sourceData structure depends on the context type as follows:
     * - site:    [ ]
     * - order:   [ 'orderId'    => int ]
     * - cart:    [ 'productIds' => int[] ]
     * - archive: [ 'taxonomy'   => string, 'termId' => int ]
     * - product: [ 'productId'  => int ]
     *
     * @example array(
     *   'type'       => 'product',
     *   'sourceData' => array( 'productId' => 123 ),
     * )
     *
     * @param array $context  The block context.
     * @return array $context {
     *     The block context including the product collection location context.
     *
     *     @type array $productCollectionLocation {
     *         @type string  $type        The context type. Possible values are 'site', 'order', 'cart', 'archive', 'product'.
     *         @type array   $sourceData  The context source data. Can be the product ID of the viewed product, the order ID of the current order viewed, etc. See structure above for more details.
     *     }
     * }
     */
    public function provide_location_context_for_inner_blocks($context)
    {
    }
}