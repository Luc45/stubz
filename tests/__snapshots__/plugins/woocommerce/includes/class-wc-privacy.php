<?php

namespace ;

/**
 * WC_Privacy Class.
 */
class WC_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Background process to clean up orders.
     *
     * @var WC_Privacy_Background_Process
     */
    protected static $background_process = null;

    /**
     * Init - hook into events.
     */
    public function __construct()
    {
        // stub
    }

    /**
     * Initial registration of privacy erasers and exporters.
     *
     * Due to the use of translation functions, this should run only after plugins loaded.
     */
    public function register_erasers_exporters()
    {
        // stub
    }

    /**
     * Add privacy policy content for the privacy policy page.
     *
     * @since 3.4.0
     */
    public function get_privacy_message()
    {
        // stub
    }

    /**
     * Spawn events for order cleanup.
     */
    public function queue_cleanup_personal_data()
    {
        // stub
    }

    /**
     * Handle some custom types of data and anonymize them.
     *
     * @param string $anonymous Anonymized string.
     * @param string $type Type of data.
     * @param string $data The data being anonymized.
     * @return string Anonymized string.
     */
    public function anonymize_custom_data_types($anonymous, $type, $data)
    {
        // stub
    }

    /**
     * Find and trash old orders.
     *
     * @since 3.4.0
     * @param  int $limit Limit orders to process per batch.
     * @return int Number of orders processed.
     */
    public static function trash_pending_orders($limit = 20)
    {
        // stub
    }

    /**
     * Find and trash old orders.
     *
     * @since 3.4.0
     * @param  int $limit Limit orders to process per batch.
     * @return int Number of orders processed.
     */
    public static function trash_failed_orders($limit = 20)
    {
        // stub
    }

    /**
     * Find and trash old orders.
     *
     * @since 3.4.0
     * @param  int $limit Limit orders to process per batch.
     * @return int Number of orders processed.
     */
    public static function trash_cancelled_orders($limit = 20)
    {
        // stub
    }

    /**
     * For a given query trash all matches.
     *
     * @since 3.4.0
     * @param array $query Query array to pass to wc_get_orders().
     * @return int Count of orders that were trashed.
     */
    protected static function trash_orders_query($query)
    {
        // stub
    }

    /**
     * Anonymize old completed orders.
     *
     * @since 3.4.0
     * @param  int $limit Limit orders to process per batch.
     * @return int Number of orders processed.
     */
    public static function anonymize_completed_orders($limit = 20)
    {
        // stub
    }

    /**
     * For a given query, anonymize all matches.
     *
     * @since 3.4.0
     * @param array $query Query array to pass to wc_get_orders().
     * @return int Count of orders that were anonymized.
     */
    protected static function anonymize_orders_query($query)
    {
        // stub
    }

    /**
     * Delete inactive accounts.
     *
     * @since 3.4.0
     * @param  int $limit Limit users to process per batch.
     * @return int Number of users processed.
     */
    public static function delete_inactive_accounts($limit = 20)
    {
        // stub
    }

    /**
     * Delete inactive accounts.
     *
     * @since 3.4.0
     * @param int $timestamp Timestamp to delete customers before.
     * @param int $limit     Limit number of users to delete per run.
     * @return int Count of customers that were deleted.
     */
    protected static function delete_inactive_accounts_query($timestamp, $limit = 20)
    {
        // stub
    }

}

