<?php
namespace NamedArgumentsScenario;

/**
 * Demonstrates named arguments introduced in PHP 8.
 */
class RectangleCalculator
{
    public function area(float $width, float $height): float
    {
        return $width * $height;
    }

    public function perimeter(float $width, float $height): float
    {
        return 2 * ($width + $height);
    }
}

/**
 * Class that uses named arguments to call methods in RectangleCalculator.
 */
class RectangleDemo
{
    public function demo(): array
    {
        $calculator = new RectangleCalculator();

        // Using named arguments to swap the order intentionally:
        $area = $calculator->area(height: 5.0, width: 10.0);
        $perimeter = $calculator->perimeter(width: 10.0, height: 5.0);

        return [
            'area'      => $area,
            'perimeter' => $perimeter,
        ];
    }
}
