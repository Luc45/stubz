<?php

namespace ;

/**
 * WC_Admin_Attributes Class.
 */
class WC_Admin_Attributes
{
    /**
     * Edited attribute ID.
     *
     * @var int
     */
    private static $edited_attribute_id = null;

    /**
     * Handles output of the attributes page in admin.
     *
     * Shows the created attributes and lets you add new ones or edit existing ones.
     * The added attributes are stored in the database and can be used for layered navigation.
     */
    public static function output()
    {
        // stub
    }

    /**
     * Get and sanitize posted attribute data.
     *
     * @return array
     */
    private static function get_posted_attribute()
    {
        // stub
    }

    /**
     * Add an attribute.
     *
     * @return bool|WP_Error
     */
    private static function process_add_attribute()
    {
        // stub
    }

    /**
     * Edit an attribute.
     *
     * @return bool|WP_Error
     */
    private static function process_edit_attribute()
    {
        // stub
    }

    /**
     * Delete an attribute.
     *
     * @return bool
     */
    private static function process_delete_attribute()
    {
        // stub
    }

    /**
     * Edit Attribute admin panel.
     *
     * Shows the interface for changing an attributes type between select and text.
     */
    public static function edit_attribute()
    {
        // stub
    }

    /**
     * Add Attribute admin panel.
     *
     * Shows the interface for adding new attributes.
     */
    public static function add_attribute()
    {
        // stub
    }

}

