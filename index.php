<?php

echo "<br>" . "~~~~~~~~~~~~~~";
echo "<br>" . "Bicycle's turn";
echo "<br>" . "~~~~~~~~~~~~~~";
echo "<br>";

require_once "Bicycle.php";
$bike = new Bicycle("blue");
var_dump($bike);
$bike->setCurrentSpeed(0);
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle("yellow");

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle("black");

echo "<br>";
echo "<br>" . "~~~~~~~~~~~~~~~";
echo "<br>" . "Cars's turn now";
echo "<br>" . "~~~~~~~~~~~~~~~";
echo "<br>";

require "Car.php";

$eleonore = new Car("black",2,"fuel");

echo $eleonore->start();
echo $eleonore->forward();
echo '<br> Vitesse de la mustang : ' . $eleonore->getCurrentSpeed() . ' km/h' . '<br>';
echo $eleonore->forward();
echo '<br> Vitesse de la mustang : ' . $eleonore->getCurrentSpeed() . ' km/h' . '<br>';
echo $eleonore->forward();
echo '<br> Vitesse de la mustang : ' . $eleonore->getCurrentSpeed() . ' km/h' . '<br>';
echo $eleonore->brake();