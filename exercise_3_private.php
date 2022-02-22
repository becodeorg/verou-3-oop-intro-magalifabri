<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage_3
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


class Beer_3 extends Beverage_3
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
