<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Rule processor that performs a comparison operation against an option value.
 */
class OptionRuleProcessor
{
    /**
     * Performs a comparison operation against the option value.
     *
     * @param object $rule         The specific rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool The result of the operation.
     */
    public function process($rule, $stored_state)
    {
        // stub
    }

    /**
     * Retrieves the option value and handles logging if necessary.
     *
     * @param object $rule         The specific rule being processed.
     * @param mixed  $default_value      The default value.
     * @param bool   $is_contains  Indicates whether the operation is "contains".
     *
     * @return mixed The option value.
     */
    private function get_option_value($rule, $default_value, $is_contains)
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

