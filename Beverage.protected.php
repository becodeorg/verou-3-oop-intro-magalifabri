<?php

declare(strict_types=1);

class Beverage_protected
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
