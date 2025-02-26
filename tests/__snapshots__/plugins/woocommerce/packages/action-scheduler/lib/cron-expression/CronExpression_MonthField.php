<?php

namespace ;

/**
 * Month field.  Allows: * , / -
 *
 * @author Michael Dowling <mtdowling@gmail.com>
 */
class CronExpression_MonthField extends \CronExpression_AbstractField
{
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

