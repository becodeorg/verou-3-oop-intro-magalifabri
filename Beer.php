<?php

require_once './Beverage.php';

class Beer extends Beverage
{
    public $name;
    public $alcoholPercentage;

    public function __construct(string $name, string $color, float $price, float $alcoholPercentage, string $temperature = "cold")
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholpercentage()
    {
        return $this->alcoholPercentage;
    }
}
