<?php
namespace Adityawangsaa\AddLibrary1;

class Customer {
    public function __construct(private string $name)
    {
        // Inisialisasi parameter name
    }

    public function sayHello(string $name): string
    {
        return "Hello $name! My name is $this->name.";
    }
}