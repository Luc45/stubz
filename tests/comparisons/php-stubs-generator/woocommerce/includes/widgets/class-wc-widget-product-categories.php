<?php

/**
 * Product categories widget class.
 *
 * @extends WC_Widget
 */
class WC_Widget_Product_Categories extends \WC_Widget
{
    /**
     * Category ancestors.
     *
     * @var array
     */
    public $cat_ancestors;
    /**
     * Current Category.
     *
     * @var bool
     */
    public $current_cat;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Output widget.
     *
     * @see WP_Widget
     * @param array $args     Widget arguments.
     * @param array $instance Widget instance.
     */
    public function widget($args, $instance)
    {
    }
}
