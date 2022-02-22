<?php

declare(strict_types=1);

require_once './Beverage.protected.php';

class Beer_protected extends Beverage_protected
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
