<?php


// --- EX 1 ---

require_once './Beverage.php';

$cola = new Beverage("black", 2);

echo $cola->getInfo()
    . '<br>'
    . $cola->temperature;
