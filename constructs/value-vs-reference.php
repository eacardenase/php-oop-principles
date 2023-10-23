<?php

// Value Objects Pros:

// Avoids primitive obsession - and readability
// Helps with consistency
// Immutable

class Age
{
    private int $age;

    public function __construct(int $age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense');
        }

        $this->age = $age;
    }

    // Immutable method
    public function increment(): static
    {
        return new static($this->age + 1);
    }

    public function get(): int
    {
        return $this->age;
    }
}

$age = new Age(35);
$age = $age->increment();

var_dump($age->get());

//function register(string $name, Age $age)
//{
//
//}
//
//register("John", new Age(500));