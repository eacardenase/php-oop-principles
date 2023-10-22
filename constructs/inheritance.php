<?php

declare(strict_types=1);

class CoffeeMaker
{
    public function brew()
    {
        var_dump("Brewing the coffee");
    }
}

class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump("Brewing a latte");
    }
}

//(new CoffeeMaker())->brew();
//(new SpecialtyCoffeeMaker())->brew();
//(new SpecialtyCoffeeMaker())->brewLatte();

class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum(string $key): int
    {
        return array_sum(array_column($this->items, $key));
    }
}

class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    public string $title;
    public int $length;

    public function __construct(string $title, int $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

//$videos = new VideosCollection([
//    new Video('Video 1', 100),
//    new Video('Video 2', 200),
//    new Video('Video 3', 300),
//]);
//
//echo $videos->length();

class AchievementType
{
    public function name()
    {
        
    }

    public function difficulty()
    {
        
    }

    public function icon()
    {
        
    }
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }

    public function name()
    {
        return "Welcome Aboard!";
    }
}