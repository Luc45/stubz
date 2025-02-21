<?php
namespace MultiInterface;

/**
 * A simple interface with one method.
 */
interface OneInterface {
    public function one(): void;
}

/**
 * Another interface with a different method.
 */
interface TwoInterface {
    public function two(): string;
}

/**
 * CombinedInterface extends both OneInterface and TwoInterface.
 */
interface CombinedInterface extends OneInterface, TwoInterface {
    public function combined(): bool;
}

/**
 * A class implementing all methods from CombinedInterface (and thus from both OneInterface & TwoInterface).
 */
class CombinedImplementation implements CombinedInterface {
    public function one(): void {
        // Some logic
    }

    public function two(): string {
        return "two";
    }

    public function combined(): bool {
        return true;
    }
}
