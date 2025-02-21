<?php
namespace AbstractScenario;

/**
 * An abstract class with a required method and a helper method.
 */
abstract class AbstractEntity {
    abstract public function getType(): string;

    public function describe(): string {
        return "This is a " . $this->getType();
    }
}

/**
 * A final class extending the abstract one.
 */
final class ConcreteEntity extends AbstractEntity {
    public function getType(): string {
        return "ConcreteEntity";
    }
}
