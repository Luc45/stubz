<?php
/**
 * Brand Description Widget
 *
 * When viewing a brand archive, show the current brands description + image
 *
 * Important: For internal use only by the Automattic\WooCommerce\Internal\Brands package.
 *
 * @package WooCommerce\Widgets
 * @version 9.4.0
 */
class WC_Widget_Brand_Description extends \WP_Widget
{
    /**
     * Widget class.
     *
     * @var string
     */
    public $woo_widget_cssclass = null;
    /**
     * Widget description.
     *
     * @var string
     */
    public $woo_widget_description = null;
    /**
     * Widget idbase.
     *
     * @var string
     */
    public $woo_widget_idbase = null;
    /**
     * Widget name.
     *
     * @var string
     */
    public $woo_widget_name = null;
    /** Constructor */
    public function __construct()
{
}
    /**
     * Echoes the widget content.
     *
     * @see WP_Widget
     *
     * @param array $args     Display arguments including 'before_title', 'after_title',
     *                        'before_widget', and 'after_widget'.
     * @param array $instance The settings for the particular instance of the widget.
     */
    public function widget($args, $instance)
{
}
    /**
     * Updates widget instance.
     *
     * @see WP_Widget->update
     *
     * @param array $new_instance New widget instance.
     * @param array $old_instance Old widget instance.
     */
    public function update($new_instance, $old_instance)
{
}
    /**
     * Outputs the settings update form.
     *
     * @param array $instance Current settings.
     */
    public function form($instance)
{
}
}
