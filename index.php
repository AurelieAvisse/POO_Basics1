<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('Red');

echo $bike->forward();
echo '<br> Bike1 speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();
echo '<br> Bike1 speed : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike->brake();

echo '<br>--------------------------';

$car = new Car('Blue', 5, 'Gazoil');

echo "<br>The car1 is " . $car->getColor() . ", it has " . $car->getNbSeating() . " seats and it uses " . $car->getTypeOfEnergy();
echo '<br>' . $car->start() . '<br>';
echo $car->forward();
echo '<br> Speed of the car1 : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Speed of the car1 : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->brake();

echo '<br>--------------------------</br />';

$bike2 = new Bicycle('Red');

echo $bike2->forward();
echo '<br> Bike2 speed : ' . $bike2->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike2->brake();
echo '<br> Bike2 speed : ' . $bike2->getCurrentSpeed() . ' km/h' . '<br>';

echo $bike2->brake();

echo '<br>--------------------------';

$car2 = new Car('Blue', 5, 'Gazoil');

echo "<br>The car2 is " . $car->getColor() . ", it has " . $car->getNbSeating() . " seats and it uses " . $car->getTypeOfEnergy();
echo '<br>' . $car2->start() . '<br>';
echo $car2->forward();
echo '<br> Speed of the car2 : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';
echo $car2->brake();
echo '<br> Speed of the car2 : ' . $car2->getCurrentSpeed() . ' km/h' . '<br>';

echo $car2->brake();
