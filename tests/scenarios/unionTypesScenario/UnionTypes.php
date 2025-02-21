<?php
namespace UnionTypesScenario;

/**
 * Shows how union types (PHP 8.0+) can be used.
 */
class Formatter {
    public function formatString(int|string $value): string {
        if (is_int($value)) {
            return "Integer value: {$value}";
        }
        return "String value: {$value}";
    }

    public function combineValues(int|string|float $a, int|string|float $b): string {
        return (string) ($a . $b);
    }
}
