<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Suggest Jetpack Backup to Woo users.
 *
 * Note: This should probably live in the Jetpack plugin in the future.
 *
 * @see  https://developer.woocommerce.com/2020/10/16/using-the-admin-notes-inbox-in-woocommerce/
 */
class MarketingJetpack
{
    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-marketing-jetpack-backup';
    /**
     * Product IDs that include Backup.
     */
    public const BACKUP_IDS = array(
2010,
2011,
2012,
2013,
2014,
2015,
2100,
2101,
2102,
2103,
2005,
2006,
2000,
2003,
2001,
2004
);
    /**
     * Maybe add a note on Jetpack Backups for Jetpack sites older than a week without Backups.
     */
    public static function possibly_add_note()
{
}
    /**
     * Get the note.
     */
    public static function get_note()
{
}
    /**
     * Check if this blog already has a Jetpack Backups product.
     *
     * @return boolean  Whether or not this blog has backups.
     */
    protected static function has_backups()
{
}
}