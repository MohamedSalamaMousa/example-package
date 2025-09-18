<?php
namespace Mohamedsalamamousa\ExamplePackage;

class Example
{
    public function hello(string $name = "World"): string
    {
        return "Hello, {$name}! Greetings from ExamplePackage.";
    }
}