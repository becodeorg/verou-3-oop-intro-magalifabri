<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/

class Beverage_ex_7
{
    private string $color;
    private float $price;
    private string $temperature;

    private static string $address = 'Melkmarkt 9, 2000 Antwerpen';

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
    public static function getAddress_method1(): string
    {
        return self::$address;
    }
    public static function getAddress_method2(): string
    {
        return Beverage_ex_7::$address;
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
