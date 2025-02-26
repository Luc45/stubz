<?php

namespace ;

/**
 * Abstract class for setting a basic lock to throttle some action.
 *
 * Class ActionScheduler_Lock
 */
abstract class ActionScheduler_Lock
{
    /**
     * Instance.
     *
     * @var ActionScheduler_Lock
     */
    private static $locker = null;

    /**
     * Duration of lock.
     *
     * @var int
     */
    protected static $lock_duration;

    /**
     * Check if a lock is set for a given lock type.
     *
     * @param string $lock_type A string to identify different lock types.
     * @return bool
     */
    public function is_locked($lock_type)
    {
        // stub
    }

    /**
     * Set a lock.
     *
     * To prevent race conditions, implementations should avoid setting the lock if the lock is already held.
     *
     * @param string $lock_type A string to identify different lock types.
     * @return bool
     */
    public abstract function set($lock_type);

    /**
     * If a lock is set, return the timestamp it was set to expiry.
     *
     * @param string $lock_type A string to identify different lock types.
     * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
     */
    public abstract function get_expiration($lock_type);

    /**
     * Get the amount of time to set for a given lock. 60 seconds by default.
     *
     * @param string $lock_type A string to identify different lock types.
     * @return int
     */
    protected function get_duration($lock_type)
    {
        // stub
    }

    /**
     * Get instance.
     *
     * @return ActionScheduler_Lock
     */
    public static function instance()
    {
        // stub
    }

}

