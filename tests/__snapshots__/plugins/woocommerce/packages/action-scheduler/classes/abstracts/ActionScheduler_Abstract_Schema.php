<?php
/**
 * Class ActionScheduler_Abstract_Schema
 *
 * @package Action_Scheduler
 *
 * @codeCoverageIgnore
 *
 * Utility class for creating/updating custom tables
 */
abstract class ActionScheduler_Abstract_Schema
{
    /**
     * Increment this value in derived class to trigger a schema update.
     *
     * @var int
     */
    protected $schema_version = 1;
    /**
     * Schema version stored in database.
     *
     * @var string
     */
    protected $db_version;
    /**
     * Names of tables that will be registered by this class.
     *
     * @var array
     */
    protected $tables = array();
    /**
     * Can optionally be used by concrete classes to carry out additional initialization work
     * as needed.
     */
    public function init()
{
}
    /**
     * Register tables with WordPress, and create them if needed.
     *
     * @param bool $force_update Optional. Default false. Use true to always run the schema update.
     *
     * @return void
     */
    public function register_tables($force_update = false)
{
}
    /**
     * Get table definition.
     *
     * @param string $table The name of the table.
     *
     * @return string The CREATE TABLE statement, suitable for passing to dbDelta
     */
    abstract protected function get_table_definition($table);
    /**
     * Get full table name.
     *
     * @param string $table Table name.
     *
     * @return string The full name of the table, including the
     *                table prefix for the current blog
     */
    protected function get_full_table_name($table)
{
}
    /**
     * Confirms that all of the tables registered by this schema class have been created.
     *
     * @return bool
     */
    public function tables_exist()
{
}
}
