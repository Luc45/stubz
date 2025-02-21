<?php

namespace TraitsExample;

/**
 * A simple trait that logs messages.
 */
trait LoggerTrait
{
    protected function logMessage(string $msg): void
    {
        // Normally we'd write to a real log, but for now just echo
        echo "[LOG] " . $msg . PHP_EOL;
    }
}
