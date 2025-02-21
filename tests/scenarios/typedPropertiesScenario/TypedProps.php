<?php
namespace TypedPropertiesScenario;

/**
 * Demonstrates typed properties introduced in PHP 7.4+.
 */
class UserProfile {
    public string $username;
    public int $age;
    public bool $isActive;

    public function __construct(string $username, int $age, bool $isActive = true) {
        $this->username = $username;
        $this->age = $age;
        $this->isActive = $isActive;
    }

    public function getProfile(): string {
        return "User {$this->username}, Age: {$this->age}, Active: " . ($this->isActive ? 'Yes' : 'No');
    }
}
