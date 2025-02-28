<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Evaluates the spec and returns a status.
 */
class EvaluateAndGetStatus
{
    /**
     * Evaluates the spec and returns a status.
     *
     * @param array  $spec The spec to evaluate.
     * @param string $current_status The note's current status.
     * @param object $stored_state Stored state.
     * @param object $rule_evaluator Evaluates rules into true/false.
     *
     * @return string The evaluated status.
     */
    public static function evaluate($spec, $current_status, $stored_state, $rule_evaluator)
    {
    }
}