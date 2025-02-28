<?php
/**
 * CRON field factory implementing a flyweight factory
 *
 * @author Michael Dowling <mtdowling@gmail.com>
 * @link http://en.wikipedia.org/wiki/Cron
 */
class CronExpression_FieldFactory
{
    /**
     * Get an instance of a field object for a cron expression position
     *
     * @param int $position CRON expression position value to retrieve
     *
     * @return CronExpression_FieldInterface
     * @throws InvalidArgumentException if a position is not valid
     */
    public function getField($position)
{
}
}
