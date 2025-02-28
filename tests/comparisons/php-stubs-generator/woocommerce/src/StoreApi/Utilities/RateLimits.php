<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * RateLimits class.
 */
class RateLimits extends \WC_Rate_Limiter
{
    /**
     * Cache group.
     */
    const CACHE_GROUP = 'store_api_rate_limit';
    /**
     * Rate limiting enabled default value.
     *
     * @var boolean
     */
    const ENABLED = false;
    /**
     * Proxy support enabled default value.
     *
     * @var boolean
     */
    const PROXY_SUPPORT = false;
    /**
     * Default amount of max requests allowed for the defined timeframe.
     *
     * @var int
     */
    const LIMIT = 25;
    /**
     * Default time in seconds before rate limits are reset.
     *
     * @var int
     */
    const SECONDS = 10;
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
     * Get current rate limit row from DB and normalize types. This query is not cached, and returns
     * a new rate limit row if none exists.
     *
     * @param string $action_id Identifier of the action.
     * @return object Object containing reset and remaining.
     */
    protected static function get_rate_limit_row($action_id)
    {
    }
    /**
     * Returns current rate limit values using cache where possible.
     *
     * @param string $action_id Identifier of the action.
     * @return object
     */
    public static function get_rate_limit($action_id)
    {
    }
    /**
     * If exceeded, seconds until reset.
     *
     * @param string $action_id Identifier of the action.
     *
     * @return bool|int
     */
    public static function is_exceeded_retry_after($action_id)
    {
    }
    /**
     * Sets the rate limit delay in seconds for action with identifier $id.
     *
     * @param string $action_id Identifier of the action.
     * @return object Current rate limits.
     */
    public static function update_rate_limit($action_id)
    {
    }
    /**
     * Retrieve a cached store api rate limit.
     *
     * @param string $action_id Identifier of the action.
     * @return bool|object
     */
    protected static function get_cached($action_id)
    {
    }
    /**
     * Cache a rate limit.
     *
     * @param string $action_id Identifier of the action.
     * @param object $current_limit Current limit object with expiry and retries remaining.
     * @return bool
     */
    protected static function set_cache($action_id, $current_limit)
    {
    }
    /**
     * Return options for Rate Limits, to be returned by the "woocommerce_store_api_rate_limit_options" filter.
     *
     * @return object Default options.
     */
    public static function get_options()
    {
    }
    /**
     * Gets a single option through provided name.
     *
     * @param string $option Option name.
     *
     * @return mixed
     */
    public static function get_option($option)
    {
    }
}