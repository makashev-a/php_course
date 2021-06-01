<?php
require "vendor/db.php";

$id = $_GET["id"];

$products = mysqli_query($connect, "SELECT * FROM `products` WHERE id = '$id'");
$products = mysqli_fetch_assoc($products);
?>
<h1><?= $products["name"] ?></h1>
<p>
    <?= $products["description"] ?>
</p>
<p>
    <?= $products["category"] ?>
</p>
<p>
    <?= $products["price"] ?>
</p>