<?php

require "db.php";

$name = $_POST["name"];
$description = $_POST["description"];
$category_id = $_POST["category_id"];
$price = $_POST["price"];

$post = mysqli_query($connect, "INSERT INTO `products` (`id`, `name`, `description`, `category_id`, `price`) VALUES (NULL, '$name', '$description', '$category_id', '$price')");

if (!$post) {
    die("Error while adding new product");
}

die("The product was successfully added");