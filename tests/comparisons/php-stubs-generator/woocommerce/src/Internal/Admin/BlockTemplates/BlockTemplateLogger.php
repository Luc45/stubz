<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Logger for block template modifications.
 */
class BlockTemplateLogger
{
    const BLOCK_ADDED = 'block_added';
    const BLOCK_REMOVED = 'block_removed';
    const BLOCK_MODIFIED = 'block_modified';
    const BLOCK_ADDED_TO_DETACHED_CONTAINER = 'block_added_to_detached_container';
    const HIDE_CONDITION_ADDED = 'hide_condition_added';
    const HIDE_CONDITION_REMOVED = 'hide_condition_removed';
    const HIDE_CONDITION_ADDED_TO_DETACHED_BLOCK = 'hide_condition_added_to_detached_block';
    const ERROR_AFTER_BLOCK_ADDED = 'error_after_block_added';
    const ERROR_AFTER_BLOCK_REMOVED = 'error_after_block_removed';
    const LOG_HASH_TRANSIENT_BASE_NAME = 'wc_block_template_events_log_hash_';
    /**
     * Event types.
     *
     * @var array
     */
    public static $event_types = array(self::BLOCK_ADDED => array('level' => \WC_Log_Levels::DEBUG, 'message' => 'Block added to template.'), self::BLOCK_REMOVED => array('level' => \WC_Log_Levels::NOTICE, 'message' => 'Block removed from template.'), self::BLOCK_MODIFIED => array('level' => \WC_Log_Levels::NOTICE, 'message' => 'Block modified in template.'), self::BLOCK_ADDED_TO_DETACHED_CONTAINER => array('level' => \WC_Log_Levels::WARNING, 'message' => 'Block added to detached container. Block will not be included in the template, since the container will not be included in the template.'), self::HIDE_CONDITION_ADDED => array('level' => \WC_Log_Levels::NOTICE, 'message' => 'Hide condition added to block.'), self::HIDE_CONDITION_REMOVED => array('level' => \WC_Log_Levels::NOTICE, 'message' => 'Hide condition removed from block.'), self::HIDE_CONDITION_ADDED_TO_DETACHED_BLOCK => array('level' => \WC_Log_Levels::WARNING, 'message' => 'Hide condition added to detached block. Block will not be included in the template, so the hide condition is not needed.'), self::ERROR_AFTER_BLOCK_ADDED => array('level' => \WC_Log_Levels::WARNING, 'message' => 'Error after block added to template.'), self::ERROR_AFTER_BLOCK_REMOVED => array('level' => \WC_Log_Levels::WARNING, 'message' => 'Error after block removed from template.'));
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
    public static function get_instance() : \Automattic\WooCommerce\Internal\Admin\BlockTemplates\BlockTemplateLogger
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
    public function template_events_to_json(string $template_id) : array
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