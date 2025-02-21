<?php
namespace ReflectionScenario;

/**
 * Demonstrates basic usage of PHP's Reflection API.
 */
class DemoClass
{
    public function helloWorld(): string
    {
        return "Hello, World!";
    }

    protected function hiddenMethod(): string
    {
        return "I'm hidden!";
    }

    private function secretMethod(): string
    {
        return "Secret stuff here.";
    }
}

/**
 * A class that inspects DemoClass via reflection.
 */
class Inspector
{
    public function inspectMethods(): array
    {
        $reflection = new \ReflectionClass(DemoClass::class);
        $methods = $reflection->getMethods();
        $methodNames = [];

        foreach ($methods as $method) {
            $methodNames[] = [
                'name'       => $method->getName(),
                'isPublic'   => $method->isPublic(),
                'isPrivate'  => $method->isPrivate(),
                'isProtected'=> $method->isProtected(),
            ];
        }
        return $methodNames;
    }
}
