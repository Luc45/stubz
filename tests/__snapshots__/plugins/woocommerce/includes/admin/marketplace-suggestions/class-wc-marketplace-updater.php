<?php

/**
 * Marketplace Suggestions Updater
 */
class WC_Marketplace_Updater
{
    /**
     * Setup.
     */
    public static function load()
{
}
    /**
     * Schedule events and hook appropriate actions.
     */
    public static function init()
{
}
    /**
     * Fetches new marketplace data, updates wc_marketplace_suggestions.
     */
    public static function update_marketplace_suggestions()
{
}
    /**
     * Used when an error has occurred when fetching suggestions.
     * Re-schedules the job earlier than the main weekly one.
     */
    public static function retry()
{
}
}
