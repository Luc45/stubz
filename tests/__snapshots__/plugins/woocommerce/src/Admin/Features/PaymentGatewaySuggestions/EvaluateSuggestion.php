<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * Evaluates the spec and returns the evaluated suggestion.
 */
class EvaluateSuggestion
{
    /**
     * Stores memoized results of evaluate_specs.
     *
     * @var array
     */
    protected static $memo = array();
    /**
     * Evaluates the spec and returns the suggestion.
     *
     * @param object|array $spec        The suggestion to evaluate.
     * @param array        $logger_args Optional. Arguments for the rule evaluator logger.
     *
     * @return object The evaluated suggestion.
     */
    public static function evaluate($spec, $logger_args = array())
{
}
    /**
     * Evaluates the specs and returns the visible suggestions.
     *
     * @param array $specs payment suggestion spec array.
     * @param array $logger_args Optional. Arguments for the rule evaluator logger.
     *
     * @return array The visible suggestions and errors.
     */
    public static function evaluate_specs($specs, $logger_args = array())
{
}
    /**
     * Resets the memoized results. Useful for testing.
     */
    public static function reset_memo()
{
}
}