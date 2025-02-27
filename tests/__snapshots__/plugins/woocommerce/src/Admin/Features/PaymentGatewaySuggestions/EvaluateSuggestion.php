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
    protected static $memo = array (
);

    /**
     * Evaluates the spec and returns the suggestion.
     *
     * @param object|array $spec        The suggestion to evaluate.
     * @param array        $logger_args Optional. Arguments for the rule evaluator logger.
     *
     * @return object The evaluated suggestion.
     */
    public static function evaluate($spec, $logger_args = array (
))
    {
        // stub
    }

    /**
     * Evaluates the specs and returns the visible suggestions.
     *
     * @param array $specs payment suggestion spec array.
     * @param array $logger_args Optional. Arguments for the rule evaluator logger.
     *
     * @return array The visible suggestions and errors.
     */
    public static function evaluate_specs($specs, $logger_args = array (
))
    {
        // stub
    }

    /**
     * Resets the memoized results. Useful for testing.
     */
    public static function reset_memo()
    {
        // stub
    }

    /**
     * Returns a memoization key for the given specs.
     *
     * @param array $specs The specs to generate a key for.
     *
     * @return string The memoization key.
     */
    private static function get_memo_key($specs)
    {
        // stub
    }

}