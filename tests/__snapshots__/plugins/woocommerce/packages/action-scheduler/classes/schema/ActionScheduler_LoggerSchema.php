<?php

/**
 * Class ActionScheduler_LoggerSchema
 *
 * @codeCoverageIgnore
 *
 * Creates a custom table for storing action logs
 */
class ActionScheduler_LoggerSchema
{
    const LOG_TABLE = 'actionscheduler_logs';

    /**
     * Schema version.
     *
     * Increment this value to trigger a schema update.
     *
     * @var int
     */
    protected $schema_version = 3;

    /**
     * Construct.
     */
    public function __construct()
{
}
    /**
     * Performs additional setup work required to support this schema.
     */
    public function init()
{
}
    /**
     * Get table definition.
     *
     * @param string $table Table name.
     */
    protected function get_table_definition($table)
{
}
    /**
     * Update the logs table schema, allowing datetime fields to be NULL.
     *
     * This is needed because the NOT NULL constraint causes a conflict with some versions of MySQL
     * configured with sql_mode=NO_ZERO_DATE, which can for instance lead to tables not being created.
     *
     * Most other schema updates happen via ActionScheduler_Abstract_Schema::update_table(), however
     * that method relies on dbDelta() and this change is not possible when using that function.
     *
     * @param string $table Name of table being updated.
     * @param string $db_version The existing schema version of the table.
     */
    public function update_schema_3_0($table, $db_version)
{
}
}
