<?php
session_start();
unset($_SESSION["name"]);
header("Location: run.php");