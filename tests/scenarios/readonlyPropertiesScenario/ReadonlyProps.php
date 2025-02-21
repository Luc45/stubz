<?php
namespace ReadonlyPropertiesScenario;

/**
 * Demonstrates readonly properties introduced in PHP 8.1.
 */
class ImmutableUser
{
    public function __construct(
        public readonly string $email,
        public readonly string $username
    ) {
    }

    public function getDetails(): string
    {
        return "User: {$this->username}, Email: {$this->email}";
    }
}
