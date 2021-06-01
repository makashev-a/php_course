<?php

include_once "db.php";
$id = $_GET["id"];
$product = R::load('products', $id);

R::trash($product);

header('Location: /');