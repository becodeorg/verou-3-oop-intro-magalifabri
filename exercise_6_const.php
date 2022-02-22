<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/

class Beverage_ex_6
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

    public function useConstant()
    {
        echo BARNAME . '<br>';
    }
}


class Beer_ex_6 extends Beverage_ex_6
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
        $this->name = $name;
        $this->setColor($color);
        $this->setPrice($price);
        $this->setTemperature($temperature);
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
