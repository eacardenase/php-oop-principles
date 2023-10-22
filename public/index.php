<?php

class Team
{
    protected string $name;
    protected array $members = [];

    public function __construct(string $name, array $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(... $params): Team
    {
        return new static(... $params);
    }

    public function name(): string
    {
        return $this->name;
    }

    public function members(): array
    {
        return $this->members;
    }

    public function add(string $name): void
    {
        $this->members[] = $name;
    }

    public function cancel()
    {
        
    }

    public function manager()
    {
        
    }
}

class Member
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

$acme = Team::start("Acme", [
    new Member("John Doe"),
    new Member("Jane Doe")
]);

var_dump($acme->members());