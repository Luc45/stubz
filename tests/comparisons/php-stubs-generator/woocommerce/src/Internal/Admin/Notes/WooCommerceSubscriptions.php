<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * WooCommerce_Subscriptions.
 */
class WooCommerceSubscriptions
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;

    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-woocommerce-subscriptions';
    /**
     * Get the note.
     *
     * @return Note|null
     */
    public static function get_note()
    {
    }
}
