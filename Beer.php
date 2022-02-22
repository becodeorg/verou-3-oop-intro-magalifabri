<?php

declare(strict_types=1);

require_once './Beverage.php';

class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;

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

    public function getAlcoholpercentage(): float
    {
        return $this->alcoholPercentage;
    }
}
