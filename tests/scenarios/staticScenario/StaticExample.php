<?php
namespace StaticScenario;

/**
 * Demonstrates static properties and methods.
 */
class Counter {
    /**
     * A static property holding the counter value.
     */
    private static int $count = 0;

    /**
     * Increments the static counter.
     */
    public static function increment(): void {
        self::$count++;
    }

    /**
     * Retrieves the current static counter value.
     */
    public static function getCount(): int {
        return self::$count;
    }
}
