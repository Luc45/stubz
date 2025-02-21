<?php
namespace IntersectionTypesScenario;

/**
 * Interface that requires a getId() method returning a string.
 */
interface Identifiable {
    public function getId(): string;
}

/**
 * Interface that requires a getName() method returning a string.
 */
interface Nameable {
    public function getName(): string;
}

/**
 * A class implementing both Identifiable and Nameable.
 */
class Person implements Identifiable, Nameable {
    public function __construct(
        private string $id,
        private string $name
    ) {}

    public function getId(): string {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }
}

/**
 * A function that accepts an object which is both Identifiable AND Nameable (intersection type).
 */
function describeEntity(Identifiable&Nameable $entity): string {
    return "Entity " . $entity->getId() . " is named " . $entity->getName();
}
