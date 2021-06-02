<?php

require_once "Car.php";

$car = new Car();

$car->model = "Subaru";
$car->horsepower = "345";
$car->color = "Black";
$car->production_year = "2020";

$car->show_car();
$car->save_car();

$car2 = new Car();

$car2->model = "Toyota";
$car2->horsepower = "250";
$car2->color = "Blue";
$car2->production_year = "2018";

$car2->show_car();
$car2->save_car();


