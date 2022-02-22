<?php

declare(strict_types=1);

require_once './Beverage.private.php';

class Beer_private extends Beverage_private
{
    private string $name;
    private float $alcoholPercentage;

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

    private function beerInfo(): string
    {
        return "Hi i'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a {$this->getColor()} color.";
    }

    public function getAlcoholpercentage(): float
    {
        return $this->alcoholPercentage;
    }
    public function getBeerInfo(): string
    {
        return $this->beerInfo();
    }
}
