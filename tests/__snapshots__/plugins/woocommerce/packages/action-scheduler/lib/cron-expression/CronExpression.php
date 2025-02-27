<?php

/**
 * CRON expression parser that can determine whether or not a CRON expression is
 * due to run, the next run date and previous run date of a CRON expression.
 * The determinations made by this class are accurate if checked run once per
 * minute (seconds are dropped from date time comparisons).
 *
 * Schedule parts must map to:
 * minute [0-59], hour [0-23], day of month, month [1-12|JAN-DEC], day of week
 * [1-7|MON-SUN], and an optional year.
 *
 * @author Michael Dowling <mtdowling@gmail.com>
 * @link http://en.wikipedia.org/wiki/Cron
 */
class CronExpression implements \Stringable
{
    const MINUTE = 0;

    const HOUR = 1;

    const DAY = 2;

    const MONTH = 3;

    const WEEKDAY = 4;

    const YEAR = 5;

    /**
     * @var array CRON expression parts
     */
    private $cronParts = null;

    /**
     * @var CronExpression_FieldFactory CRON field factory
     */
    private $fieldFactory = null;

    /**
     * @var array Order in which to test of cron parts
     */
    private static $order = array (
  0 => 5,
  1 => 3,
  2 => 2,
  3 => 4,
  4 => 1,
  5 => 0,
);

    /**
    * Factory method to create a new CronExpression.
    *
    * @param string $expression The CRON expression to create.  There are
    *      several special predefined values which can be used to substitute the
    *      CRON expression:
    *
    *      @yearly, @annually) - Run once a year, midnight, Jan. 1 - 0 0 1 1 *
    *      @monthly - Run once a month, midnight, first of month - 0 0 1 * *
    *      @weekly - Run once a week, midnight on Sun - 0 0 * * 0
    *      @daily - Run once a day, midnight - 0 0 * * *
    *      @hourly - Run once an hour, first minute - 0 * * * *
    *
    *@param CronExpression_FieldFactory $fieldFactory (optional) Field factory to use
    *
    * @return CronExpression
    */
    public static function factory($expression, CronExpression_FieldFactory|null $fieldFactory = null)
    {
        // stub
    }

    /**
     * Parse a CRON expression
     *
     * @param string       $expression   CRON expression (e.g. '8 * * * *')
     * @param CronExpression_FieldFactory $fieldFactory Factory to create cron fields
     */
    public function __construct($expression, CronExpression_FieldFactory $fieldFactory)
    {
        // stub
    }

    /**
     * Set or change the CRON expression
     *
     * @param string $value CRON expression (e.g. 8 * * * *)
     *
     * @return CronExpression
     * @throws InvalidArgumentException if not a valid CRON expression
     */
    public function setExpression($value)
    {
        // stub
    }

    /**
     * Set part of the CRON expression
     *
     * @param int    $position The position of the CRON expression to set
     * @param string $value    The value to set
     *
     * @return CronExpression
     * @throws InvalidArgumentException if the value is not valid for the part
     */
    public function setPart($position, $value)
    {
        // stub
    }

    /**
     * Get a next run date relative to the current date or a specific date
     *
     * @param string|DateTime $currentTime (optional) Relative calculation date
     * @param int             $nth         (optional) Number of matches to skip before returning a
     *     matching next run date.  0, the default, will return the current
     *     date and time if the next run date falls on the current date and
     *     time.  Setting this value to 1 will skip the first match and go to
     *     the second match.  Setting this value to 2 will skip the first 2
     *     matches and so on.
     * @param bool $allowCurrentDate (optional) Set to TRUE to return the
     *     current date if it matches the cron expression
     *
     * @return DateTime
     * @throws RuntimeException on too many iterations
     */
    public function getNextRunDate($currentTime = 'now', $nth = 0, $allowCurrentDate = false)
    {
        // stub
    }

    /**
     * Get a previous run date relative to the current date or a specific date
     *
     * @param string|DateTime $currentTime      (optional) Relative calculation date
     * @param int             $nth              (optional) Number of matches to skip before returning
     * @param bool            $allowCurrentDate (optional) Set to TRUE to return the
     *     current date if it matches the cron expression
     *
     * @return DateTime
     * @throws RuntimeException on too many iterations
     * @see CronExpression::getNextRunDate
     */
    public function getPreviousRunDate($currentTime = 'now', $nth = 0, $allowCurrentDate = false)
    {
        // stub
    }

    /**
     * Get multiple run dates starting at the current date or a specific date
     *
     * @param int             $total            Set the total number of dates to calculate
     * @param string|DateTime $currentTime      (optional) Relative calculation date
     * @param bool            $invert           (optional) Set to TRUE to retrieve previous dates
     * @param bool            $allowCurrentDate (optional) Set to TRUE to return the
     *     current date if it matches the cron expression
     *
     * @return array Returns an array of run dates
     */
    public function getMultipleRunDates($total, $currentTime = 'now', $invert = false, $allowCurrentDate = false)
    {
        // stub
    }

    /**
     * Get all or part of the CRON expression
     *
     * @param string $part (optional) Specify the part to retrieve or NULL to
     *      get the full cron schedule string.
     *
     * @return string|null Returns the CRON expression, a part of the
     *      CRON expression, or NULL if the part was specified but not found
     */
    public function getExpression($part = null)
    {
        // stub
    }

    /**
     * Helper method to output the full expression.
     *
     * @return string Full CRON expression
     */
    public function __toString()
    {
        // stub
    }

    /**
     * Determine if the cron is due to run based on the current date or a
     * specific date.  This method assumes that the current number of
     * seconds are irrelevant, and should be called once per minute.
     *
     * @param string|DateTime $currentTime (optional) Relative calculation date
     *
     * @return bool Returns TRUE if the cron is due to run or FALSE if not
     */
    public function isDue($currentTime = 'now')
    {
        // stub
    }

    /**
     * Get the next or previous run date of the expression relative to a date
     *
     * @param string|DateTime $currentTime      (optional) Relative calculation date
     * @param int             $nth              (optional) Number of matches to skip before returning
     * @param bool            $invert           (optional) Set to TRUE to go backwards in time
     * @param bool            $allowCurrentDate (optional) Set to TRUE to return the
     *     current date if it matches the cron expression
     *
     * @return DateTime
     * @throws RuntimeException on too many iterations
     */
    protected function getRunDate($currentTime = null, $nth = 0, $invert = false, $allowCurrentDate = false)
    {
        // stub
    }

}
