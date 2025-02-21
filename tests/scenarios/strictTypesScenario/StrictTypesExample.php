<?php
declare(strict_types=1);

namespace StrictTypesScenario;

/**
 * Demonstrates strict typing in PHP.
 */
class Calculator {
    public function add(int $a, int $b): int {
        return $a + $b;
    }

    public function divide(float $a, float $b): float {
        return $a / $b;
    }

    /**
     * A method that requires string or int as a parameter.
     */
    public function stringify(int|string $value): string {
        if (is_int($value)) {
            return (string) $value;
        }
        return $value;
    }
}
