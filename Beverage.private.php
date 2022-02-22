<?php

declare(strict_types=1);

class Beverage_private
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(
        string $color,
        float $price,
        string $temperature = "cold"
    ) {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
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

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color.";
    }
}
