<?php
namespace ConstructorPropertyPromotionScenario;

/**
 * Demonstrates constructor property promotion introduced in PHP 8.
 */
class Product
{
    public function __construct(
        public string $name,
        public float $price,
        private int $stock = 0
    ) {
    }

    public function getInfo(): string
    {
        return "Product: {$this->name}, Price: {$this->price}, Stock: {$this->stock}";
    }
}
