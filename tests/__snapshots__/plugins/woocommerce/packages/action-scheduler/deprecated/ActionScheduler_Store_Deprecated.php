<?php

namespace ;

/**
 * Class ActionScheduler_Store_Deprecated
 *
 * @codeCoverageIgnore
 */
abstract class ActionScheduler_Store_Deprecated extends \
{
    /**
     * Mark an action that failed to fetch correctly as failed.
     *
     * @since 2.2.6
     *
     * @param int $action_id The ID of the action.
     */
    public function mark_failed_fetch_action($action_id)
    {
        // stub
    }

    /**
     * Add base hooks
     *
     * @since 2.2.6
     */
    protected static function hook()
    {
        // stub
    }

    /**
     * Remove base hooks
     *
     * @since 2.2.6
     */
    protected static function unhook()
    {
        // stub
    }

    /**
     * Get the site's local time.
     *
     * @deprecated 2.1.0
     * @return DateTimeZone
     */
    protected function get_local_timezone()
    {
        // stub
    }

}

