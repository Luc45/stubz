<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * Onboarding_Payments.
 */
class OnboardingPayments
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;

    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-onboarding-payments-reminder';
    /**
     * Get the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}
