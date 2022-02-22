<?php

class Beverage_private
{
    private $color;
    private $price;
    private $temperature;

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
