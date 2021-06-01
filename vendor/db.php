<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'first_db');

if (!$connect) {
    die("Database connection error");
}