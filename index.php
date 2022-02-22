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
    . '<br><br>';

$fakeDuvel = new Beverage('blond', 3.5);
try {
    $fakeDuvel->getAlcoholpercentage();
} catch (\Throwable $th) {
    echo $th;
}


// --- EX 3 ---
