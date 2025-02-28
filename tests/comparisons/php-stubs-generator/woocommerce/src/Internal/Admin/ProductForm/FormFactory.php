<?php

namespace Automattic\WooCommerce\Internal\Admin\ProductForm;

/**
 * Factory that contains logic for the WooCommerce Product Form.
 */
class FormFactory
{
    /**
     * Class instance.
     *
     * @var Form instance
     */
    protected static $instance = null;
    /**
     * Store form fields.
     *
     * @var array
     */
    protected static $form_fields = array();
    /**
     * Store form cards.
     *
     * @var array
     */
    protected static $form_subsections = array();
    /**
     * Store form sections.
     *
     * @var array
     */
    protected static $form_sections = array();
    /**
     * Store form tabs.
     *
     * @var array
     */
    protected static $form_tabs = array();
    /**
     * Get class instance.
     */
    final public static function instance()
    {
    }
    /**
     * Init.
     */
    public function init()
    {
    }
    /**
     * Adds a field to the product form.
     *
     * @param string $id Field id.
     * @param string $plugin_id Plugin id.
     * @param array  $args Array containing the necessary arguments.
     *     $args = array(
     *       'type'            => (string) Field type. Required.
     *       'section'         => (string) Field location. Required.
     *       'order'           => (int) Field order.
     *       'properties'      => (array) Field properties.
     *       'name'            => (string) Field name.
     *     ).
     * @return Field|WP_Error New field or WP_Error.
     */
    public static function add_field($id, $plugin_id, $args)
    {
    }
    /**
     * Adds a Subsection to the product form.
     *
     * @param string $id Subsection id.
     * @param string $plugin_id Plugin id.
     * @param array  $args Array containing the necessary arguments.
     * @return Subsection|WP_Error New subsection or WP_Error.
     */
    public static function add_subsection($id, $plugin_id, $args = array())
    {
    }
    /**
     * Adds a section to the product form.
     *
     * @param string $id Card id.
     * @param string $plugin_id Plugin id.
     * @param array  $args Array containing the necessary arguments.
     * @return Section|WP_Error New section or WP_Error.
     */
    public static function add_section($id, $plugin_id, $args)
    {
    }
    /**
     * Adds a tab to the product form.
     *
     * @param string $id Card id.
     * @param string $plugin_id Plugin id.
     * @param array  $args Array containing the necessary arguments.
     * @return Tab|WP_Error New section or WP_Error.
     */
    public static function add_tab($id, $plugin_id, $args)
    {
    }
    /**
     * Returns list of registered fields.
     *
     * @param array $sort_by key and order to sort by.
     * @return array list of registered fields.
     */
    public static function get_fields($sort_by = array('key' => 'order', 'order' => 'asc'))
    {
    }
    /**
     * Returns list of registered cards.
     *
     * @param array $sort_by key and order to sort by.
     * @return array list of registered cards.
     */
    public static function get_subsections($sort_by = array('key' => 'order', 'order' => 'asc'))
    {
    }
    /**
     * Returns list of registered sections.
     *
     * @param array $sort_by key and order to sort by.
     * @return array list of registered sections.
     */
    public static function get_sections($sort_by = array('key' => 'order', 'order' => 'asc'))
    {
    }
    /**
     * Returns list of registered tabs.
     *
     * @param array $sort_by key and order to sort by.
     * @return array list of registered tabs.
     */
    public static function get_tabs($sort_by = array('key' => 'order', 'order' => 'asc'))
    {
    }
}
