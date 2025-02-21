<?php
namespace GenericsScenario;

/**
 * A mock "generic" collection using docblock hints to simulate generics.
 *
 * @template T
 */
class Collection {
    /**
     * @var array<int, T>
     */
    private array $items = [];

    /**
     * @param T $item
     */
    public function add($item): void {
        $this->items[] = $item;
    }

    /**
     * @return T|null
     */
    public function getFirst() {
        return $this->items[0] ?? null;
    }

    /**
     * @return array<int, T>
     */
    public function all(): array {
        return $this->items;
    }
}

/**
 * A sample user class (could be the generic type T).
 */
class User {
    public function __construct(
        private string $name
    ) {}

    public function getName(): string {
        return $this->name;
    }
}
