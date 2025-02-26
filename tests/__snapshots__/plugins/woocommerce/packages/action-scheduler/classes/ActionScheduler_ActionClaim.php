<?php

namespace ;

/**
 * Class ActionScheduler_ActionClaim
 */
class ActionScheduler_ActionClaim extends \
{
    /**
     * Claim ID.
     *
     * @var string
     */
    private $id = '';

    /**
     * Claimed action IDs.
     *
     * @var int[]
     */
    private $action_ids = array(
);

    /**
     * Construct.
     *
     * @param string $id Claim ID.
     * @param int[]  $action_ids Action IDs.
     */
    public function __construct($id, array $action_ids)
    {
        // stub
    }

    /**
     * Get claim ID.
     */
    public function get_id()
    {
        // stub
    }

    /**
     * Get IDs of claimed actions.
     */
    public function get_actions()
    {
        // stub
    }

}

