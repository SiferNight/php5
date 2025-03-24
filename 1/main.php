<?php
require_once 'Car.php';

$newCar = new Car('Toyota','Mark ||', 2025 , 1000);

echo $newCar->getInfo();

$newCar->drive(123);

echo $newCar->getInfo();

