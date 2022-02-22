<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage_4
{
    protected $color;
    protected $price;
    protected $temperature;

    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        return "This beverage is $this->temperature and $this->color.";
    }
}


class Beer_4 extends Beverage_4
{
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(
        string $name,
        string $color,
        float $price,
        float $alcoholPercentage,
        string $temperature = "cold"
    ) {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getTemperature(): string
    {
        return $this->temperature;
    }
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }
}
