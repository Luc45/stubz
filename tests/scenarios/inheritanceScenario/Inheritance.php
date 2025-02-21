<?php
namespace InheritanceScenario;

/**
 * Base class with a simple method.
 */
class BaseClass {
    public function sayHello(): string {
        return "Hello from BaseClass!";
    }
}

/**
 * MidClass inherits from BaseClass and extends the message.
 */
class MidClass extends BaseClass {
    public function sayHello(): string {
        return parent::sayHello() . " Extended by MidClass.";
    }
}

/**
 * FinalClass extends MidClass, creating a 3-level inheritance chain.
 */
class FinalClass extends MidClass {
    public function sayHello(): string {
        return parent::sayHello() . " Extended by FinalClass.";
    }
}
