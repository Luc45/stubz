<?php

/**
 * Class ActionScheduler_DBStoreMigrator
 *
 * A class for direct saving of actions to the table data store during migration.
 *
 * @since 3.0.0
 */
class ActionScheduler_DBStoreMigrator
{
    /**
     * Save an action with optional last attempt date.
     *
     * Normally, saving an action sets its attempted date to 0000-00-00 00:00:00 because when an action is first saved,
     * it can't have been attempted yet, but migrated completed actions will have an attempted date, so we need to save
     * that when first saving the action.
     *
     * @param ActionScheduler_Action $action Action to migrate.
     * @param null|DateTime          $scheduled_date Optional date of the first instance to store.
     * @param null|DateTime          $last_attempt_date Optional date the action was last attempted.
     *
     * @return string The action ID
     * @throws \RuntimeException When the action is not saved.
     */
    public function save_action(ActionScheduler_Action $action, DateTime|null $scheduled_date = null, DateTime|null $last_attempt_date = null)
    {
        // stub
    }

}
