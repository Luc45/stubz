<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor for sending before a specified date/time.
 */
class PublishBeforeTimeRuleProcessor extends \
{
    /**
     * The DateTime provider.
     *
     * @var DateTimeProviderInterface
     */
    protected $date_time_provider = null;

    /**
     * Constructor.
     *
     * @param DateTimeProviderInterface $date_time_provider The DateTime provider.
     */
    public function __construct($date_time_provider = null)
    {
        // stub
    }

    /**
     * Process the rule.
     *
     * @param object $rule         The specific rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool Whether the rule passes or not.
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

