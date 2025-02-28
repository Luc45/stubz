<?php
/**
 * Provide a way to set simple transient locks to block behaviour
 * for up-to a given duration.
 *
 * Class ActionScheduler_OptionLock
 *
 * @since 3.0.0
 */
class ActionScheduler_OptionLock extends \ActionScheduler_Lock
{
    /**
     * Set a lock using options for a given amount of time (60 seconds by default).
     *
     * Using an autoloaded option avoids running database queries or other resource intensive tasks
     * on frequently triggered hooks, like 'init' or 'shutdown'.
     *
     * For example, ActionScheduler_QueueRunner->maybe_dispatch_async_request() uses a lock to avoid
     * calling ActionScheduler_QueueRunner->has_maximum_concurrent_batches() every time the 'shutdown',
     * hook is triggered, because that method calls ActionScheduler_QueueRunner->store->get_claim_count()
     * to find the current number of claims in the database.
     *
     * @param string $lock_type A string to identify different lock types.
     * @bool True if lock value has changed, false if not or if set failed.
     */
    public function set($lock_type)
{
}
    /**
     * If a lock is set, return the timestamp it was set to expiry.
     *
     * @param string $lock_type A string to identify different lock types.
     * @return bool|int False if no lock is set, otherwise the timestamp for when the lock is set to expire.
     */
    public function get_expiration($lock_type)
{
}
    /**
     * Given the lock string, derives the lock expiration timestamp (or false if it cannot be determined).
     *
     * @param string $lock_value String containing a timestamp, or pipe-separated combination of unique value and timestamp.
     *
     * @return false|int
     */
    private function get_expiration_from($lock_value)
{
}
    /**
     * Get the key to use for storing the lock in the transient
     *
     * @param string $lock_type A string to identify different lock types.
     * @return string
     */
    protected function get_key($lock_type)
{
}
    /**
     * Supplies the existing lock value, or an empty string if not set.
     *
     * @param string $lock_type A string to identify different lock types.
     *
     * @return string
     */
    private function get_existing_lock($lock_type)
{
}
    /**
     * Supplies a lock value consisting of a unique value and the current timestamp, which are separated by a pipe
     * character.
     *
     * Example: (string) "649de012e6b262.09774912|1688068114"
     *
     * @param string $lock_type A string to identify different lock types.
     *
     * @return string
     */
    private function new_lock_value($lock_type)
{
}
}
