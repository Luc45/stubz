<?php

namespace Action_Scheduler\Migration;

/**
 * Class BatchFetcher
 *
 * @package Action_Scheduler\Migration
 *
 * @since 3.0.0
 *
 * @codeCoverageIgnore
 */
class BatchFetcher
{
    /**
     * BatchFetcher constructor.
     *
     * @param ActionScheduler_Store $source_store Source store object.
     */
    public function __construct(\ActionScheduler_Store $source_store)
    {
    }
    /**
     * Retrieve a list of actions.
     *
     * @param int $count The number of actions to retrieve.
     *
     * @return int[] A list of action IDs
     */
    public function fetch($count = 10)
    {
    }
}
