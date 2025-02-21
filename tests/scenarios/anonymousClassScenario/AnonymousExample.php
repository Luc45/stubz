<?php
namespace AnonymousClassScenario;

/**
 * A class that returns an anonymous class instance.
 */
class AnonymousFactory {
    public function buildAnonymous(string $message): object {
        return new class($message) {
            private string $message;

            public function __construct(string $message) {
                $this->message = $message;
            }

            public function getMessage(): string {
                return $this->message;
            }
        };
    }
}
