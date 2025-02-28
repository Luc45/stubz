<?php

/**
 * WC_Widget
 *
 * @package  WooCommerce\Abstracts
 * @version  2.5.0
 * @extends  WP_Widget
 */
abstract class WC_Widget extends \WP_Widget
{
    /**
     * CSS class.
     *
     * @var string
     */
    public $widget_cssclass = null;

    /**
     * Widget description.
     *
     * @var string
     */
    public $widget_description = null;

    /**
     * Widget ID.
     *
     * @var string
     */
    public $widget_id = null;

    /**
     * Widget name.
     *
     * @var string
     */
    public $widget_name = null;

    /**
     * Settings.
     *
     * @var array
     */
    public $settings = null;

    /**
     * Constructor.
     */
    public function __construct()
{
}
    /**
     * Get cached widget.
     *
     * @param  array $args Arguments.
     * @return bool true if the widget is cached otherwise false
     */
    public function get_cached_widget($args)
{
}
    /**
     * Cache the widget.
     *
     * @param  array  $args Arguments.
     * @param  string $content Content.
     * @return string the content that was cached
     */
    public function cache_widget($args, $content)
{
}
    /**
     * Flush the cache.
     */
    public function flush_widget_cache()
{
}
    /**
     * Get this widgets title.
     *
     * @param array $instance Array of instance options.
     * @return string
     */
    protected function get_instance_title($instance)
{
}
    /**
     * Output the html at the start of a widget.
     *
     * @param array $args Arguments.
     * @param array $instance Instance.
     */
    public function widget_start($args, $instance)
{
}
    /**
     * Output the html at the end of a widget.
     *
     * @param  array $args Arguments.
     */
    public function widget_end($args)
{
}
    /**
     * Updates a particular instance of a widget.
     *
     * @see    WP_Widget->update
     * @param  array $new_instance New instance.
     * @param  array $old_instance Old instance.
     * @return array
     */
    public function update($new_instance, $old_instance)
{
}
    /**
     * Outputs the settings update form.
     *
     * @see   WP_Widget->form
     *
     * @param array $instance Instance.
     */
    public function form($instance)
{
}
    /**
     * Get current page URL with various filtering props supported by WC.
     *
     * @return string
     * @since  3.3.0
     */
    protected function get_current_page_url()
{
}
    /**
     * Get widget id plus scheme/protocol to prevent serving mixed content from (persistently) cached widgets.
     *
     * @since  3.4.0
     * @param  string $widget_id Id of the cached widget.
     * @param  string $scheme    Scheme for the widget id.
     * @return string            Widget id including scheme/protocol.
     */
    protected function get_widget_id_for_cache($widget_id, $scheme = '')
{
}
}
