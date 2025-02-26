<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor that fails.
 */
class FailRuleProcessor extends \
{
    /**
     * Fails the rule.
     *
     * @param object $rule         The specific rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool Always false.
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

