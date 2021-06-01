<?php

include_once "db.php";

$id = $_POST["id"];
$name = $_POST["name"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];
$price = $_POST["price"];

$product = R::load('products', $id);

$product["name"] = $name;
$product["description"] = $description;
$product["category_id"] = $category_id;
$product["price"] = $price;

R::store($product);

header("Location: /edit.php?id=$id");
