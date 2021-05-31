<?php
session_start();

$login = $_POST["login"];
$password = $_POST["password"];

$users = include "users.php";

foreach ($users as $user) {
    if ($user["login"] == $login && $user["password"] == $password) {
        $_SESSION["name"] = $user["name"];
        header("Location: profile.php");
        break;
    }
}