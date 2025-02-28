<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor for sending before a specified date/time.
 */
class PublishBeforeTimeRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\RuleProcessorInterface
{
    /**
     * The DateTime provider.
     *
     * @var DateTimeProviderInterface
     */
    protected $date_time_provider;
    /**
     * Constructor.
     *
     * @param DateTimeProviderInterface $date_time_provider The DateTime provider.
     */
    public function __construct($date_time_provider = null)
    {
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
    }
}