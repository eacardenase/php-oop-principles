<?php

abstract class AchievementType{
    public function name(): string
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', " $0", $class));
    }

    public function icon(): string
    {
        return strtolower(str_replace(" ", "-", $this->name())) . ".png";
    }

    abstract public function qualifier($user);
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
        
    }
}

class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {

    }
}

class FirstBestAnswer extends AchievementType
{

    public function qualifier($user)
    {

    }
}

$achievement = new ReachTop50();

var_dump($achievement->icon());