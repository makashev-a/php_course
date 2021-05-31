<?php

$tmp_name = $_FILES["image"]["tmp_name"];
$name = $_FILES["image"]["name"];
$type = $_FILES["image"]["type"];
$ext = pathinfo($name, PATHINFO_EXTENSION);
$dir = '../uploads/' . md5(strtotime('now')) . '_' . md5($name) . '.' . $ext;

if (!($type == "image/jpeg" || $type == "image/png")) {
    echo "Файл не поддерживается";
    die();
}

if (!move_uploaded_file($tmp_name, $dir)) {
    echo "Произошла ошибка при загрузке файла";
} else {
    echo "Файл успешно загружен по пути - <a href='$dir'>$dir</a>";
}