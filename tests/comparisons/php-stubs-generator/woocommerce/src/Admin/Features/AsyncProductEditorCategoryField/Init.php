<?php

namespace Automattic\WooCommerce\Admin\Features\AsyncProductEditorCategoryField;

/**
 * Loads assets related to the async category field for the product editor.
 */
class Init
{
    const FEATURE_ID = 'async-product-editor-category-field';
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Adds meta_box_cb callback arguments for custom metabox.
     *
     * @param array $args Category taxonomy args.
     * @return array $args category taxonomy args.
     */
    public function add_metabox_args($args)
    {
    }
    /**
     * Enqueue scripts needed for the product form block editor.
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Enqueue styles needed for the rich text editor.
     */
    public function enqueue_styles()
    {
    }
}