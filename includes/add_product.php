<?php

$name = $_POST["name"];
$descr = $_POST["descr"];
$category = $_POST["category"];
$price = $_POST["price"];

$content = "Название товара: $name\nОписание товара: $descr\nКатегория товара: $category\nЦена товара: $price";
$filename = "products.txt";

$fp = fopen($filename, "w");
fwrite($fp, $content);
fclose($fp);