<?php

require "db.php";

$id = $_GET["id"];

$delete = mysqli_query($connect, "DELETE FROM `products` WHERE `products`.`id` = '$id'");

if (!$delete) {
    die("Error while deleting product");
}

die("The product was successfully deleted");