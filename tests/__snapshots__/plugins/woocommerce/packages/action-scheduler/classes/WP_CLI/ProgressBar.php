<?php

namespace Action_Scheduler\WP_CLI;

/**
 * Class ProgressBar
 *
 * @package Action_Scheduler\WP_CLI
 *
 * @since 3.0.0
 *
 * @codeCoverageIgnore
 */
class ProgressBar
{
    /**
     * Current number of ticks.
     *
     * @var integer
     */
    protected $total_ticks;
    /**
     * Total number of ticks.
     *
     * @var integer
     */
    protected $count;
    /**
     * Progress bar update interval.
     *
     * @var integer
     */
    protected $interval;
    /**
     * Progress bar message.
     *
     * @var string
     */
    protected $message;
    /**
     * Instance.
     *
     * @var \cli\progress\Bar
     */
    protected $progress_bar;
    /**
     * ProgressBar constructor.
     *
     * @param string  $message    Text to display before the progress bar.
     * @param integer $count      Total number of ticks to be performed.
     * @param integer $interval   Optional. The interval in milliseconds between updates. Default 100.
     *
     * @throws \Exception When this is not run within WP CLI.
     */
    public function __construct($message, $count, $interval = 100)
{
}
    /**
     * Increment the progress bar ticks.
     */
    public function tick()
{
}
    /**
     * Get the progress bar tick count.
     *
     * @return int
     */
    public function current()
{
}
    /**
     * Finish the current progress bar.
     */
    public function finish()
{
}
    /**
     * Set the message used when creating the progress bar.
     *
     * @param string $message The message to be used when the next progress bar is created.
     */
    public function set_message($message)
{
}
    /**
     * Set the count for a new progress bar.
     *
     * @param integer $count The total number of ticks expected to complete.
     */
    public function set_count($count)
{
}
    /**
     * Set up the progress bar.
     */
    protected function setup_progress_bar()
{
}
}