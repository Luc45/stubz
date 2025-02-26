<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Date & time interval and numeric range handling class for Reporting API.
 */
class TimeInterval
{
    /**
     * Format string for ISO DateTime formatter.
     *
     * @var string
     */
    public static $iso_datetime_format = 'Y-m-d\\TH:i:s';

    /**
     * Format string for use in SQL queries.
     *
     * @var string
     */
    public static $sql_datetime_format = 'Y-m-d H:i:s';

    /**
     * Converts local datetime to GMT/UTC time.
     *
     * @param string $datetime_string String representation of local datetime.
     * @return DateTime
     */
    public static function convert_local_datetime_to_gmt($datetime_string)
    {
        // stub
    }

    /**
     * Returns default 'before' parameter for the reports.
     *
     * @return DateTime
     */
    public static function default_before()
    {
        // stub
    }

    /**
     * Returns default 'after' parameter for the reports.
     *
     * @return DateTime
     */
    public static function default_after()
    {
        // stub
    }

    /**
     * Returns date format to be used as grouping clause in SQL.
     *
     * @param string $time_interval Time interval.
     * @param string $table_name Name of the db table relevant for the date constraint.
     * @param string $date_column_name Name of the date table column.
     * @return mixed
     */
    public static function db_datetime_format($time_interval, $table_name, $date_column_name = 'date_created')
    {
        // stub
    }

    /**
     * Returns quarter for the DateTime.
     *
     * @param DateTime $datetime Local date & time.
     * @return int|null
     */
    public static function quarter($datetime)
    {
        // stub
    }

    /**
     * Returns simple week number for the DateTime, for week starting on $first_day_of_week.
     *
     * The first week of the year is considered to be the week containing January 1.
     * The second week starts on the next $first_day_of_week.
     *
     * @param DateTime $datetime          Local date for which the week number is to be calculated.
     * @param int      $first_day_of_week 0 for Sunday to 6 for Saturday.
     * @return int
     */
    public static function simple_week_number($datetime, $first_day_of_week)
    {
        // stub
    }

    /**
     * Returns ISO 8601 week number for the DateTime, if week starts on Monday,
     * otherwise returns simple week number.
     *
     * @see TimeInterval::simple_week_number()
     *
     * @param DateTime $datetime          Local date for which the week number is to be calculated.
     * @param int      $first_day_of_week 0 for Sunday to 6 for Saturday.
     * @return int
     */
    public static function week_number($datetime, $first_day_of_week)
    {
        // stub
    }

    /**
     * Returns time interval id for the DateTime.
     *
     * @param string   $time_interval Time interval type (week, day, etc).
     * @param DateTime $datetime      Date & time.
     * @return string
     */
    public static function time_interval_id($time_interval, $datetime)
    {
        // stub
    }

    /**
     * Calculates number of time intervals between two dates, closed interval on both sides.
     *
     * @param DateTime $start_datetime Start date & time.
     * @param DateTime $end_datetime End date & time.
     * @param string   $interval Time interval increment, e.g. hour, day, week.
     *
     * @return int
     */
    public static function intervals_between($start_datetime, $end_datetime, $interval)
    {
        // stub
    }

    /**
     * Returns a new DateTime object representing the next hour start/previous hour end if reversed.
     *
     * @param DateTime $datetime Date and time.
     * @param bool     $reversed Going backwards in time instead of forward.
     * @return DateTime
     */
    public static function next_hour_start($datetime, $reversed = false)
    {
        // stub
    }

    /**
     * Returns a new DateTime object representing the next day start, or previous day end if reversed.
     *
     * @param DateTime $datetime Date and time.
     * @param bool     $reversed Going backwards in time instead of forward.
     * @return DateTime
     */
    public static function next_day_start($datetime, $reversed = false)
    {
        // stub
    }

    /**
     * Returns DateTime object representing the next week start, or previous week end if reversed.
     *
     * The next week start is the first day of the next week at 00:00:00.
     * The previous week end is the last day of the previous week at 23:59:59.
     * The start day is determined by the "start_of_week" wp_option.
     *
     * @param DateTime $datetime Date and time.
     * @param bool     $reversed Going backwards in time instead of forward.
     * @return DateTime
     */
    public static function next_week_start($datetime, $reversed = false)
    {
        // stub
    }

    /**
     * Returns a new DateTime object representing the next month start, or previous month end if reversed.
     *
     * @param DateTime $datetime Date and time.
     * @param bool     $reversed Going backwards in time instead of forward.
     * @return DateTime
     */
    public static function next_month_start($datetime, $reversed = false)
    {
        // stub
    }

    /**
     * Returns a new DateTime object representing the next quarter start, or previous quarter end if reversed.
     *
     * @param DateTime $datetime Date and time.
     * @param bool     $reversed Going backwards in time instead of forward.
     * @return DateTime
     */
    public static function next_quarter_start($datetime, $reversed = false)
    {
        // stub
    }

    /**
     * Return a new DateTime object representing the next year start, or previous year end if reversed.
     *
     * @param DateTime $datetime Date and time.
     * @param bool     $reversed Going backwards in time instead of forward.
     * @return DateTime
     */
    public static function next_year_start($datetime, $reversed = false)
    {
        // stub
    }

    /**
     * Returns beginning of next time interval for provided DateTime.
     *
     * E.g. for current DateTime, beginning of next day, week, quarter, etc.
     *
     * @param DateTime $datetime      Date and time.
     * @param string   $time_interval Time interval, e.g. week, day, hour.
     * @param bool     $reversed Going backwards in time instead of forward.
     * @return DateTime
     */
    public static function iterate($datetime, $time_interval, $reversed = false)
    {
        // stub
    }

    /**
     * Returns expected number of items on the page in case of date ordering.
     *
     * @param int $expected_interval_count Expected number of intervals in total.
     * @param int $items_per_page          Number of items per page.
     * @param int $page_no                 Page number.
     *
     * @return float|int
     */
    public static function expected_intervals_on_page($expected_interval_count, $items_per_page, $page_no)
    {
        // stub
    }

    /**
     * Returns true if there are any intervals that need to be filled in the response.
     *
     * @param int    $expected_interval_count Expected number of intervals in total.
     * @param int    $db_records              Total number of records for given period in the database.
     * @param int    $items_per_page          Number of items per page.
     * @param int    $page_no                 Page number.
     * @param string $order                   asc or desc.
     * @param string $order_by                Column by which the result will be sorted.
     * @param int    $intervals_count         Number of records for given (possibly shortened) time interval.
     *
     * @return bool
     */
    public static function intervals_missing($expected_interval_count, $db_records, $items_per_page, $page_no, $order, $order_by, $intervals_count)
    {
        // stub
    }

    /**
     * Normalize "*_between" parameters to "*_min" and "*_max" for numeric values
     * and "*_after" and "*_before" for date values.
     *
     * @param array        $request Query params from REST API request.
     * @param string|array $param_names One or more param names to handle. Should not include "_between" suffix.
     * @param bool         $is_date Boolean if the param is date is related.
     * @return array Normalized query values.
     */
    public static function normalize_between_params($request, $param_names, $is_date)
    {
        // stub
    }

    /**
     * Validate a "*_between" range argument (an array with 2 numeric items).
     *
     * @param  mixed           $value Parameter value.
     * @param  WP_REST_Request $request REST Request.
     * @param  string          $param Parameter name.
     * @return WP_Error|boolean
     */
    public static function rest_validate_between_numeric_arg($value, $request, $param)
    {
        // stub
    }

    /**
     * Validate a "*_between" range argument (an array with 2 date items).
     *
     * @param  mixed           $value Parameter value.
     * @param  WP_REST_Request $request REST Request.
     * @param  string          $param Parameter name.
     * @return WP_Error|boolean
     */
    public static function rest_validate_between_date_arg($value, $request, $param)
    {
        // stub
    }

    /**
     * Get dates from a timeframe string.
     *
     * @param int           $timeframe Timeframe to use.  One of: last_week|last_month|last_quarter|last_6_months|last_year.
     * @param DateTime|null $current_date DateTime of current date to compare.
     * @return array
     */
    public static function get_timeframe_dates($timeframe, $current_date = null)
    {
        // stub
    }

}

