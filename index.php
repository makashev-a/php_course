<link rel="stylesheet" href="css/style.css">

<?php

require_once "Car.php";

$car = new Car("Subaru", "Black", 345, 2020);

$car->show_car();
$car->save_car();

$car2 = new Car("Toyota", "Blue", 250, 2018);

$car2->show_car();
$car2->save_car();

?>

