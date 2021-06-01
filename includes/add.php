<?php

include_once "db.php";

$name = $_POST["name"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];
$price = $_POST["price"];

$product = R::dispense("products");

$product["name"] = $name;
$product["description"] = $description;
$product["category_id"] = $category_id;
$product["price"] = $price;

R::store($product);

header("Location: /");