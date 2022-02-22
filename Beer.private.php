<?php

require_once './Beverage.private.php';

class Beer_private extends Beverage_private
{
    private $name;
    private $alcoholPercentage;

    public function __construct(string $name, string $color, float $price, float $alcoholPercentage, string $temperature = "cold")
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    private function beerInfo()
    {
        return "Hi i'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a $this->color color.";
    }

    public function getAlcoholpercentage()
    {
        return $this->alcoholPercentage;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getBeerInfo()
    {
        return $this->beerInfo();
    }
}
