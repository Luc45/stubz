<?php
namespace FinalScenario;

/**
 * Demonstrates final classes and final methods.
 */

/**
 * A final class cannot be extended.
 */
final class ImmutableConfig {
    private array $settings = [];

    public function __construct(array $initialSettings = []) {
        $this->settings = $initialSettings;
    }

    /**
     * A final method cannot be overridden even if the class were extendable.
     */
    public final function getSetting(string $key): mixed {
        return $this->settings[$key] ?? null;
    }
}

/**
 * A non-final class but with a final method.
 */
class PartialFinal {
    public final function nonOverrideableMethod(): string {
        return "This method cannot be overridden.";
    }

    public function normalMethod(): string {
        return "This method can be overridden.";
    }
}
