<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Logger for block template modifications.
 */
class BlockTemplateLogger
{
    public const BLOCK_ADDED = 'block_added';
    public const BLOCK_REMOVED = 'block_removed';
    public const BLOCK_MODIFIED = 'block_modified';
    public const BLOCK_ADDED_TO_DETACHED_CONTAINER = 'block_added_to_detached_container';
    public const HIDE_CONDITION_ADDED = 'hide_condition_added';
    public const HIDE_CONDITION_REMOVED = 'hide_condition_removed';
    public const HIDE_CONDITION_ADDED_TO_DETACHED_BLOCK = 'hide_condition_added_to_detached_block';
    public const ERROR_AFTER_BLOCK_ADDED = 'error_after_block_added';
    public const ERROR_AFTER_BLOCK_REMOVED = 'error_after_block_removed';
    public const LOG_HASH_TRANSIENT_BASE_NAME = 'wc_block_template_events_log_hash_';
    /**
     * Event types.
     *
     * @var array
     */
    public static $event_types;
    /**
     * Singleton instance.
     *
     * @var BlockTemplateLogger
     */
    protected static $instance = null;
    /**
     * Logger instance.
     *
     * @var \WC_Logger
     */
    protected $logger = null;
    /**
     * Get the singleton instance.
     */
    public static function get_instance(): Automattic\WooCommerce\Internal\Admin\BlockTemplates\BlockTemplateLogger
{
}
    /**
     * Constructor.
     */
    protected function __construct()
{
}
    /**
     * Get all template events for a given template as a JSON like array.
     *
     * @param string $template_id Template ID.
     */
    public function template_events_to_json(string $template_id): array
{
}
    /**
     * Log all template events for a given template to the log file.
     *
     * @param string $template_id Template ID.
     */
    public function log_template_events_to_file(string $template_id)
{
}
}