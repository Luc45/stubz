<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor for publishing if wc-admin has been active for at least the
 * given number of seconds.
 */
class WCAdminActiveForRuleProcessor
{
    /**
     * Provides the amount of time wcadmin has been active for.
     *
     * @var WCAdminActiveForProvider
     */
    protected $wcadmin_active_for_provider = null;

    /**
     * Constructor
     *
     * @param object $wcadmin_active_for_provider Provides the amount of time wcadmin has been active for.
     */
    public function __construct($wcadmin_active_for_provider = null)
    {
        // stub
    }

    /**
     * Performs a comparison operation against the amount of time wc-admin has
     * been active for in days.
     *
     * @param object $rule         The rule being processed.
     * @param object $stored_state Stored state.
     *
     * @return bool The result of the operation.
     */
    public function process($rule, $stored_state)
    {
        // stub
    }

    /**
     * Validates the rule.
     *
     * @param object $rule The rule to validate.
     *
     * @return bool Pass/fail.
     */
    public function validate($rule)
    {
        // stub
    }

}