<?php

namespace MyProject;

class SimpleClass {
    const GREETING = 'Hello, world!';

    public function doSomething(): string {
        return static::GREETING;
    }
}
