<?php

/**
 * Rate limit class.
 */
class WC_Rate_Limiter
{
    const CACHE_GROUP = 'wc_rate_limit';

    /**
     * Hook in methods.
     */
    public static function init()
{
}
    /**
     * Constructs key name from action identifier.
     * Left in for backwards compatibility.
     *
     * @param string $action_id Identifier of the action.
     * @return string
     */
    public static function storage_id($action_id)
{
}
    /**
     * Gets a cache prefix.
     *
     * @param string $action_id Identifier of the action.
     * @return string
     */
    protected static function get_cache_key($action_id)
{
}
    /**
     * Retrieve a cached rate limit.
     *
     * @param string $action_id Identifier of the action.
     * @return bool|int
     */
    protected static function get_cached($action_id)
{
}
    /**
     * Cache a rate limit.
     *
     * @param string $action_id Identifier of the action.
     * @param int    $expiry Timestamp when the limit expires.
     * @return bool
     */
    protected static function set_cache($action_id, $expiry)
{
}
    /**
     * Returns true if the action is not allowed to be run by the rate limiter yet, false otherwise.
     *
     * @param string $action_id Identifier of the action.
     * @return bool
     */
    public static function retried_too_soon($action_id)
{
}
    /**
     * Sets the rate limit delay in seconds for action with identifier $id.
     *
     * @param string $action_id Identifier of the action.
     * @param int    $delay Delay in seconds.
     * @return bool True if the option setting was successful, false otherwise.
     */
    public static function set_rate_limit($action_id, $delay)
{
}
    /**
     * Cleanup expired rate limits from the database and clear caches.
     */
    public static function cleanup()
{
}
}
