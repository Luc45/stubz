<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Specs data source poller class.
 * This handles polling specs from JSON endpoints, and
 * stores the specs in to the database as an option.
 */
class RemoteInboxNotificationsDataSourcePoller
{
    const ID = 'remote_inbox_notifications';

    const DATA_SOURCES = array (
);

    /**
     * Class instance.
     *
     * @var RemoteInboxNotificationsDataSourcePoller instance
     */
    protected static $instance = null;

    /**
     * Get class instance.
     */
    public static function get_instance()
    {
        // stub
    }

    /**
     * Validate the spec.
     *
     * @param object $spec The spec to validate.
     * @param string $url  The url of the feed that provided the spec.
     *
     * @return bool The result of the validation.
     */
    protected function validate_spec($spec, $url)
    {
        // stub
    }

    /**
     * Validate the action.
     *
     * @param object $action The action to validate.
     * @param string $url    The url of the feed containing the action (for error reporting).
     *
     * @return bool The result of the validation.
     */
    private function validate_action($action, $url)
    {
        // stub
    }

    /**
     * Get data sources.
     *
     * @return array
     */
    public static function get_data_sources()
    {
        // stub
    }

}