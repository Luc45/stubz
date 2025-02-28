<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor that performs a comparison operation against the base
 * location - country.
 */
class BaseLocationCountryRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\RuleProcessorInterface
{
    /**
     * Performs a comparison operation against the base location - country.
     *
     * @param object $rule         The specific rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool The result of the operation.
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