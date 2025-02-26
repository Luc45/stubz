<?php

namespace ;

/**
 * This class adds actions to track usage of the Product Collection Block.
 */
class WC_Product_Collection_Block_Tracking extends \
{
    /**
     * Init Tracking.
     */
    public function init()
    {
        // stub
    }

    /**
     * Track feature usage of the Product Collection block within the site editor.
     *
     * @param int      $post_id  The post ID.
     * @param \WP_Post $post     The post object.
     *
     * @return void
     */
    public function track_collection_instances($post_id, $post)
    {
        // stub
    }

    /**
     * Track usage of the Product Collection block within the given blocks.
     *
     * @param array $blocks                The parsed blocks to check.
     * @param bool  $is_in_single_product  Whether we are in a single product container (used for keeping state in the recurring process).
     * @param bool  $is_in_template_part   Whether we are in a template part (used for keeping state in the recurring process).
     * @param bool  $is_in_synced_pattern  Whether we are in a synced block (used for keeping state in the recurring process).
     *
     * @return array Parsed instances of the Product Collection block.
     */
    private function parse_blocks_track_data($blocks, $is_in_single_product = false, $is_in_template_part = false, $is_in_synced_pattern = false)
    {
        // stub
    }

    /**
     * Parse editor's location context from WP Post.
     *
     * Possible contexts:
     * - post
     * - page
     * - single-product
     * - product-archive
     * - cart
     * - checkout
     * - product-catalog
     * - order-confirmation
     *
     * @param WP_Post $post The Post instance.
     *
     * @return string Returns the context.
     */
    private function parse_editor_location_context($post)
    {
        // stub
    }

    /**
     * Parse the collection query filters from the query attributes.
     *
     * @param array $block The parsed block.
     * @return array The filters data for tracking.
     */
    private function get_query_filters_usage_data($block)
    {
        // stub
    }

}

