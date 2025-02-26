<?php

namespace ;

/**
 * Day of month field.  Allows: * , / - ? L W
 *
 * 'L' stands for "last" and specifies the last day of the month.
 *
 * The 'W' character is used to specify the weekday (Monday-Friday) nearest the
 * given day. As an example, if you were to specify "15W" as the value for the
 * day-of-month field, the meaning is: "the nearest weekday to the 15th of the
 * month". So if the 15th is a Saturday, the trigger will fire on Friday the
 * 14th. If the 15th is a Sunday, the trigger will fire on Monday the 16th. If
 * the 15th is a Tuesday, then it will fire on Tuesday the 15th. However if you
 * specify "1W" as the value for day-of-month, and the 1st is a Saturday, the
 * trigger will fire on Monday the 3rd, as it will not 'jump' over the boundary
 * of a month's days. The 'W' character can only be specified when the
 * day-of-month is a single day, not a range or list of days.
 *
 * @author Michael Dowling <mtdowling@gmail.com>
 */
class CronExpression_DayOfMonthField extends \CronExpression_AbstractField
{
    /**
     * Get the nearest day of the week for a given day in a month
     *
     * @param int $currentYear  Current year
     * @param int $currentMonth Current month
     * @param int $targetDay    Target day of the month
     *
     * @return DateTime Returns the nearest date
     */
    private static function getNearestWeekday($currentYear, $currentMonth, $targetDay)
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy(DateTime $date, $value)
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function increment(DateTime $date, $invert = false)
    {
        // stub
    }

    /**
     * {@inheritdoc}
     */
    public function validate($value)
    {
        // stub
    }

}

