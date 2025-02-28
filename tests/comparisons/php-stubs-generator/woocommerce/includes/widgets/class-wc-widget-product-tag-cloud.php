<?php

/**
 * Widget product tag cloud
 */
class WC_Widget_Product_Tag_Cloud extends \WC_Widget
{
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
     *
     * @param array $args     Arguments.
     * @param array $instance Widget instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Return the taxonomy being displayed.
     *
     * @param  object $instance Widget instance.
     * @return string
     */
    public function get_current_taxonomy($instance)
    {
    }
    /**
     * Returns topic count text.
     *
     * @since 3.4.0
     * @param int $count Count text.
     * @return string
     */
    public function topic_count_text($count)
    {
    }
    // Ignore whole block to avoid warnings about PSR2.Methods.MethodDeclaration.Underscore violation.
    // @codingStandardsIgnoreStart
    /**
     * Return the taxonomy being displayed.
     *
     * @deprecated 3.4.0
     * @param  object $instance Widget instance.
     * @return string
     */
    public function _get_current_taxonomy($instance)
    {
    }
    /**
     * Returns topic count text.
     *
     * @deprecated 3.4.0
     * @since 2.6.0
     * @param int $count Count text.
     * @return string
     */
    public function _topic_count_text($count)
    {
    }
    // @codingStandardsIgnoreEnd
}