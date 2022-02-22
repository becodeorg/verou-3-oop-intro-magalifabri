<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


// --- EX 1 ---

require_once './Beverage.php';

$cola = new Beverage("black", 2);

echo 'EX 1:<br>'
    . $cola->getInfo()
    . '<br>'
    . $cola->temperature
    . '<br><br>';


// --- EX 2 ---

require_once './Beer.php';

$duvel = new Beer('Duvel', 'blond', 3.5, 8.5);

echo 'EX 2:<br>'
    . $duvel->getAlcoholpercentage()
    . '<br>'
    . $duvel->alcoholPercentage
    . '<br>'
    . $duvel->color
    . '<br>'
    . $duvel->getInfo()
    . '<br>';

$fakeDuvel = new Beverage('blond', 3.5);
try {
    $fakeDuvel->getAlcoholpercentage();
} catch (\Throwable $th) {
    echo $th . '<br><br>';
}


// --- EX 3 ---

require_once './Beer.private.php';

$duvel = new Beer_private('Duvel', 'blond', 3.5, 8.5);

echo 'EX 3:<br>'
    . $duvel->getAlcoholpercentage()
    . '<br>'
    . $duvel->getColor()
    . '<br>'
    . $duvel->getInfo()
    . '<br>'
    . $duvel->getBeerInfo()
    . '<br><br>';
