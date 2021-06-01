<?php

include_once "includes/db.php";

$id = $_GET["id"];

$product = R::load('products', $id);

if ($product["name"] === NULL) {
    echo '<h1>404. Товар не найден</h1>';
    die();
}

?>

<h1>Название товара: <?= $product["name"] ?></h1>
<h3>Описание товара: <?= $product["description"] ?></h3>
<h3>Категория товара: <?= $product["category_id"] ?></h3>
<h3>Цена товара: <?= $product["price"] ?></h3>
