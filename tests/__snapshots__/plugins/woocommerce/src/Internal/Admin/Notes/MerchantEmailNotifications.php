<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Merchant email notifications.
 * This gets all non-sent notes type `email` and sends them.
 */
class MerchantEmailNotifications extends \
{
    /**
     * Initialize the merchant email notifications.
     */
    public static function init()
    {
        // stub
    }

    /**
     * Trigger the note action.
     */
    public static function trigger_notification_action()
    {
        // stub
    }

    /**
     * Send all the notifications type `email`.
     */
    public static function run()
    {
        // stub
    }

    /**
     * Send the notification to the merchant.
     *
     * @param object $note The note to send.
     */
    public static function send_merchant_notification($note)
    {
        // stub
    }

    /**
     * Get the preferred name for user. First choice is
     * the user's first name, and then display_name.
     *
     * @param WP_User $user Recipient to send the note to.
     * @return string User's name.
     */
    public static function get_merchant_preferred_name($user)
    {
        // stub
    }

    /**
     * Get users by role to notify.
     *
     * @param object $note The note to send.
     * @return array Users to notify
     */
    public static function get_notification_recipients($note)
    {
        // stub
    }

}

