<?php
require_once 'animal.php';

class Cat extends Animal
{
    public string $color;

    public function __construct(string $name, int $age, string $color, string $species='кошка',)
    {
        parent::__construct($name, $age, $species);
        $this->color=$color;

    }

    public function makeSound(): string
    {
        return "meow";
    }

}