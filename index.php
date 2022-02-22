<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


// --- EX 1 ---

require_once './exercise_1_classes.php';

$cola = new Beverage("black", 2);

echo 'EX 1:<br>'
    . $cola->getInfo()
    . '<br>'
    . $cola->temperature
    . '<br><br>';


// --- EX 2 ---

require_once './exercise_2_extending.php';

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

require_once './exercise_3_private.php';

$duvel = new Beer_3('Duvel', 'blond', 3.5, 8.5);

echo 'EX 3:<br>'
    . $duvel->getAlcoholpercentage()
    . '<br>'
    . $duvel->getColor()
    . '<br>';

$duvel->setColor('light');

echo $duvel->getColor()
    . '<br>'
    . $duvel->getInfo()
    . '<br>'
    . $duvel->getBeerInfo()
    . '<br><br>';


// --- EX 4 ---

require_once './exercise_4_protected.php';

$duvel = new Beer_4('Duvel', 'blond', 3.5, 8.5);

echo 'EX 4:<br>'
    . $duvel->getAlcoholpercentage()
    . '<br>'
    . $duvel->getColor()
    . '<br>'
    . $duvel->getInfo()
    . '<br><br>';


// --- EX 5 ---

require_once './exercise_5_public.php';

$cola = new Beverage_ex_5("black", 2);

echo 'EX 5:<br>'
    . $cola->getInfo()
    . '<br>'
    // . $cola->temperature
    . '<br><br>';


// --- EX 6 ---

require_once './exercise_6_const.php';

echo 'EX 6:<br>';

define('BARNAME', 'Het Vervolg');
echo BARNAME . '<br>';

$bev = new Beverage_ex_6('black', 2);
$bev->useConstant();

$beer = new Beer_ex_6('mud', 'black', 2, 1);
$beer->useConstant();
