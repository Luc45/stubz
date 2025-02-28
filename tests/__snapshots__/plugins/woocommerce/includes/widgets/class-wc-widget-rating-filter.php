<?php

/**
 * Widget rating filter class.
 */
class WC_Widget_Rating_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Count products after other filters have occurred by adjusting the main query.
     *
     * @param  int $rating Rating.
     * @return int
     */
    protected function get_filtered_product_count($rating)
{
}
    /**
     * Widget function.
     *
     * @see WP_Widget
     * @param array $args     Arguments.
     * @param array $instance Widget instance.
     */
    public function widget($args, $instance)
{
}
}
