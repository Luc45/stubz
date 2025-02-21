<?php
namespace AttributesScenario;

use Attribute;

/**
 * A custom attribute that can be applied to classes or methods.
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class MyCustomAttribute {
    public function __construct(
        private string $description
    ) {}

    public function getDescription(): string {
        return $this->description;
    }
}

/**
 * A class marked with MyCustomAttribute.
 */
#[MyCustomAttribute("Demo class showing PHP 8 attributes")]
class DemoClass {
    #[MyCustomAttribute("Demo method with attributes")]
    public function doSomething(): string {
        return "Doing something with an attribute!";
    }
}
