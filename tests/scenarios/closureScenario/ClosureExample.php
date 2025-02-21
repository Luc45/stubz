<?php
namespace ClosureScenario;

/**
 * Demonstrates usage of a closure (anonymous function).
 */
class StringProcessor {
    /**
     * Applies a callable to a string.
     */
    public function applyTransform(string $input, callable $transform): string {
        return $transform($input);
    }

    /**
     * Returns a closure that prefixes text.
     */
    public function getPrefixer(string $prefix): \Closure {
        return function (string $input) use ($prefix): string {
            return $prefix . $input;
        };
    }
}
