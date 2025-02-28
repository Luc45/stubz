<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Install_JP_And_WCS_Plugins
 */
class InstallJPAndWCSPlugins
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;

    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-install-jp-and-wcs-plugins';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
    /**
     * Action the Install Jetpack and WooCommerce Shipping & Tax note, if any exists,
     * and as long as both the Jetpack and WooCommerce Shipping & Tax plugins have been
     * activated.
     */
    public static function action_note()
    {
    }
    /**
     * Install the Jetpack and WooCommerce Shipping & Tax plugins in response to the action
     * being clicked in the admin note.
     *
     * @param Note $note The note being actioned.
     */
    public function install_jp_and_wcs_plugins($note)
    {
    }
    /**
     * Create an alert notification in response to an error installing a plugin.
     *
     * @param string $slug The slug of the plugin being installed.
     */
    public function on_install_error($slug)
    {
    }
}
