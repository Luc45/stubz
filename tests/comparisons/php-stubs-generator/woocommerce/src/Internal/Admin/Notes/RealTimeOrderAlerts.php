<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Real_Time_Order_Alerts
 */
class RealTimeOrderAlerts
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    const NOTE_NAME = 'wc-admin-real-time-order-alerts';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}