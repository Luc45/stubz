<?php
namespace MatchExpressionScenario;

/**
 * Demonstrates the match expression in PHP 8+.
 */
class MatchCalculator
{
    public function operation(string $operator, int $a, int $b): int
    {
        return match ($operator) {
            '+' => $a + $b,
            '-' => $a - $b,
            '*' => $a * $b,
            '/' => intdiv($a, $b),
            default => throw new \InvalidArgumentException("Invalid operator: {$operator}")
        };
    }

    public function describe(int|string $value): string
    {
        return match (true) {
            is_int($value) => "Integer value: $value",
            is_string($value) => "String value: $value",
        };
    }
}
