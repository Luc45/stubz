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
     * All template events.
     *
     * @var array
     */
    private $all_template_events = array (
);

    /**
     * Templates.
     *
     * @var array
     */
    private $templates = array (
);

    /**
     * Threshold severity.
     *
     * @var int
     */
    private $threshold_severity = null;

    /**
     * Get the singleton instance.
     */
    public static function get_instance(): Automattic\WooCommerce\Internal\Admin\BlockTemplates\BlockTemplateLogger
    {
        // stub
    }

    /**
     * Constructor.
     */
    protected function __construct()
    {
        // stub
    }

    /**
     * Get all template events for a given template as a JSON like array.
     *
     * @param string $template_id Template ID.
     */
    public function template_events_to_json(string $template_id): array
    {
        // stub
    }

    /**
     * Get all template events as a JSON like array.
     *
     * @param array $template_events Template events.
     *
     * @return array The JSON.
     */
    private function to_json(array $template_events): array
    {
        // stub
    }

    /**
     * Log all template events for a given template to the log file.
     *
     * @param string $template_id Template ID.
     */
    public function log_template_events_to_file(string $template_id)
    {
        // stub
    }

    /**
     * Has the template events changed since the last time they were logged?
     *
     * @param string $template_id Template ID.
     * @param string $events_hash Events hash.
     */
    private function has_template_events_changed(string $template_id, string $events_hash)
    {
        // stub
    }

    /**
     * Generate a hash for a given set of template events.
     *
     * @param array $template_events Template events.
     */
    private function generate_template_events_hash(array $template_events): string
    {
        // stub
    }

    /**
     * Set the template events hash for a given template.
     *
     * @param string $template_id Template ID.
     * @param string $hash        Hash of template events.
     */
    private function set_template_events_log_hash(string $template_id, string $hash)
    {
        // stub
    }

    /**
     * Log an event.
     *
     * @param string         $event_type      Event type.
     * @param BlockInterface $block           Block.
     * @param array          $additional_info Additional info.
     */
    private function log(string $event_type, Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block, $additional_info = array (
))
    {
        // stub
    }

    /**
     * Should the logger handle a given level?
     *
     * @param int $level Level to check.
     */
    private function should_handle($level)
    {
        // stub
    }

    /**
     * Add a template event.
     *
     * @param array                  $event_type_info Event type info.
     * @param BlockTemplateInterface $template        Template.
     * @param ContainerInterface     $container       Container.
     * @param BlockInterface         $block           Block.
     * @param array                  $additional_info Additional info.
     */
    private function add_template_event(array $event_type_info, Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface $template, Automattic\WooCommerce\Admin\BlockTemplates\ContainerInterface $container, Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block, array $additional_info = array (
))
    {
        // stub
    }

    /**
     * Format a message for logging.
     *
     * @param string $message Message to log.
     * @param array  $info    Additional info to log.
     */
    private function format_message(string $message, array $info = array (
)): string
    {
        // stub
    }

    /**
     * Format info for logging.
     *
     * @param array $info Info to log.
     */
    private function format_info(array $info): array
    {
        // stub
    }

    /**
     * Format an exception for logging.
     *
     * @param \Exception $exception Exception to format.
     */
    private function format_exception(Exception $exception): array
    {
        // stub
    }

    /**
     * Format an exception trace for logging.
     *
     * @param array $trace Exception trace to format.
     */
    private function format_exception_trace(array $trace): array
    {
        // stub
    }

    /**
     * Format a block template for logging.
     *
     * @param BlockTemplateInterface $template Template to format.
     */
    private function format_template(Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface $template): string
    {
        // stub
    }

    /**
     * Format a block for logging.
     *
     * @param BlockInterface $block Block to format.
     */
    private function format_block(Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block): string
    {
        // stub
    }

}