<?php

$bmw = [
    'model'=> 'X5',
    'speed'=> '120',
    'doors'=> '5',
    'year'=> '2015'
];

$toyota = [
    'model'=> 'camry',
    'speed'=> '160',
    'doors'=> '5',
    'year'=> '2011'
];

$opel = [
    'model'=> 'vectra',
    'speed'=> '100',
    'doors'=> '5',
    'year'=> '2004'
];

$cars = [
    'bmw' => $bmw, 
    'toyota' => $toyota, 
    'opel' => $opel
];

foreach ($cars as $car => $value) {
    echo "<h4>CAR $car <br>";
    echo implode(' ', $value) . "</h4>";
}