<?php

namespace ;

/**
 * Brand Thumbnails Widget
 *
 * Show brand images as thumbnails
 *
 * Important: For internal use only by the Automattic\WooCommerce\Internal\Brands package.
 *
 * @package WooCommerce\Widgets
 * @version 9.4.0
 */
class WC_Widget_Brand_Thumbnails
{
    /**
     * Widget CSS class.
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
     * Widget id base.
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
        // stub
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
        // stub
    }

    /**
     * Update widget instance.
     *
     * @param array $new_instance The new settings for the particular instance of the widget.
     * @param array $old_instance The old settings for the particular instance of the widget.
     *
     * @see WP_Widget->update
     */
    public function update($new_instance, $old_instance)
    {
        // stub
    }

    /**
     * Outputs the settings update form.
     *
     * @param array $instance Current settings.
     */
    public function form($instance)
    {
        // stub
    }

}

