<?php

const LOGIN = "admin",
PASSWORD = "secret123";

$tmp_login = "admin";
$tmp_password = "secret123";

if ($tmp_login == LOGIN && $tmp_password == PASSWORD) {
    echo "Authorization is successfull!<br>";
} elseif ($tmp_login == LOGIN && $tmp_password != PASSWORD) {
    echo "Please check your passsword!<br>";
} elseif ($tmp_login != LOGIN) {
    echo "User not found!<br>";
}

$isStatus = false;
$statusResult = ($isStatus == true) ? 43224656 : 98645623;
echo "Status = " . $statusResult . "<br>";

$typeCar = 'BMW';

switch ($typeCar) {
    case "BMW":
        echo 'BMW is a very good car';
        break;
    case "Toyota":
        echo 'Toyota is a very reliable car!';
        break;
    case "Lada":
        echo "Don't buy these cars!";
        break;
    default:
        echo 'Car not found';
        break;
}




