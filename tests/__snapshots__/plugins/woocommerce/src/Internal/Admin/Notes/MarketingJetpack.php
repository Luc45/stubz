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
    const NOTE_NAME = 'wc-admin-marketing-jetpack-backup';

    const BACKUP_IDS = array (
  0 => 2010,
  1 => 2011,
  2 => 2012,
  3 => 2013,
  4 => 2014,
  5 => 2015,
  6 => 2100,
  7 => 2101,
  8 => 2102,
  9 => 2103,
  10 => 2005,
  11 => 2006,
  12 => 2000,
  13 => 2003,
  14 => 2001,
  15 => 2004,
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