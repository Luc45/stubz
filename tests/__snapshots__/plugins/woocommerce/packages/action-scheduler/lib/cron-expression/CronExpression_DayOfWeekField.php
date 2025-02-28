<?php

/**
 * Day of week field.  Allows: * / , - ? L #
 *
 * Days of the week can be represented as a number 0-7 (0|7 = Sunday)
 * or as a three letter string: SUN, MON, TUE, WED, THU, FRI, SAT.
 *
 * 'L' stands for "last". It allows you to specify constructs such as
 * "the last Friday" of a given month.
 *
 * '#' is allowed for the day-of-week field, and must be followed by a
 * number between one and five. It allows you to specify constructs such as
 * "the second Friday" of a given month.
 *
 * @author Michael Dowling <mtdowling@gmail.com>
 */
class CronExpression_DayOfWeekField
{
    /**
     * {@inheritdoc}
     */
    public function isSatisfiedBy(DateTime $date, $value)
{
}
    /**
     * {@inheritdoc}
     */
    public function increment(DateTime $date, $invert = false)
{
}
    /**
     * {@inheritdoc}
     */
    public function validate($value)
{
}
}
