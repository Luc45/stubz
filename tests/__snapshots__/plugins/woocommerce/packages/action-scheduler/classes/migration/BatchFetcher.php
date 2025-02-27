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
     * Store instance.
     *
     * @var ActionScheduler_Store
     */
    private $store = null;

    /**
     * BatchFetcher constructor.
     *
     * @param ActionScheduler_Store $source_store Source store object.
     */
    public function __construct(ActionScheduler_Store $source_store)
    {
        // stub
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
        // stub
    }

    /**
     * Generate a list of prioritized of action search parameters.
     *
     * @param int $count Number of actions to find.
     *
     * @return array
     */
    private function get_query_strategies($count)
    {
        // stub
    }

}