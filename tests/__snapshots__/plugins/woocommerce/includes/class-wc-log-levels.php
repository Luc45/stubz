<?php
/**
 * Log levels class.
 */
abstract class WC_Log_Levels
{
    public const EMERGENCY = 'emergency';
    public const ALERT = 'alert';
    public const CRITICAL = 'critical';
    public const ERROR = 'error';
    public const WARNING = 'warning';
    public const NOTICE = 'notice';
    public const INFO = 'info';
    public const DEBUG = 'debug';
    /**
     * Level strings mapped to integer severity.
     *
     * @var array
     */
    protected static $level_to_severity = array (
  'emergency' => 800,
  'alert' => 700,
  'critical' => 600,
  'error' => 500,
  'warning' => 400,
  'notice' => 300,
  'info' => 200,
  'debug' => 100,
);
    /**
     * Severity integers mapped to level strings.
     *
     * This is the inverse of $level_severity.
     *
     * @var array
     */
    protected static $severity_to_level = array (
  800 => 'emergency',
  700 => 'alert',
  600 => 'critical',
  500 => 'error',
  400 => 'warning',
  300 => 'notice',
  200 => 'info',
  100 => 'debug',
);
    /**
     * Validate a level string.
     *
     * @param string $level Log level.
     * @return bool True if $level is a valid level.
     */
    public static function is_valid_level($level)
{
}
    /**
     * Translate level string to integer.
     *
     * @param string $level Log level, options: emergency|alert|critical|error|warning|notice|info|debug.
     * @return int 100 (debug) - 800 (emergency) or 0 if not recognized
     */
    public static function get_level_severity($level)
{
}
    /**
     * Get an associative array with `level name => numerical severity` key/value pairs.
     *
     * @return int[]
     */
    public static function get_all_level_severities()
{
}
    /**
     * Translate severity integer to level string.
     *
     * @param int $severity Severity level.
     * @return bool|string False if not recognized. Otherwise string representation of level.
     */
    public static function get_severity_level($severity)
{
}
    /**
     * Get an associative array with `numerical severity => level name` key/value pairs.
     *
     * @return string[]
     */
    public static function get_all_severity_levels()
{
}
    /**
     * Get the UI label for a log level.
     *
     * @param string $level Log level, options: emergency|alert|critical|error|warning|notice|info|debug.
     *
     * @return string
     */
    public static function get_level_label($level)
{
}
    /**
     * Get the UI labels for all log levels.
     *
     * @return string[]
     */
    public static function get_all_level_labels()
{
}
}
