<?php
namespace MagicMethodsScenario;

/**
 * Demonstrates usage of magic methods like __get, __set, __isset, __unset, etc.
 */
class MagicBox {
    private array $properties = [];

    public function __get(string $name): mixed {
        return $this->properties[$name] ?? null;
    }

    public function __set(string $name, mixed $value): void {
        $this->properties[$name] = $value;
    }

    public function __isset(string $name): bool {
        return isset($this->properties[$name]);
    }

    public function __unset(string $name): void {
        unset($this->properties[$name]);
    }

    public function __toString(): string {
        return "MagicBox with keys: " . implode(', ', array_keys($this->properties));
    }
}
