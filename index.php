<?php

include_once "includes/db.php";

$products = R::findAll('products');


?>

<form action="includes/add.php" method="post">
    <p>Название товара</p>
    <input type="text" name="name">
    <p>Описание товара</p>
    <textarea name="description"></textarea>
    <p>Категория товара</p>
    <select name="category_id">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <p>Цена товара</p>
    <input type="number" name="price"> <br><br>
    <button type="submit">Добавить товар</button>
</form>

<hr>

<table>
    <tr>
        <th>ID</th>
        <th>Название товара</th>
        <th>Категория товара</th>
        <th>Цена товара</th>
    </tr>
    <?php

    foreach ($products as $product) {
        ?>
        <tr>
            <td><?= $product["id"] ?></td>
            <td><?= $product["name"] ?></td>
            <td><?= $product["category_id"] ?></td>
            <td><?= $product["price"] ?></td>
            <td><a href="user.php?id=<?= $product["id"] ?>">Подробнее</a></td>
            <td><a href="edit.php?id=<?= $product["id"] ?>">Редактировать</a></td>
            <td><a href="includes/delete.php?id=<?= $product["id"] ?>">Удалить</a></td>
        </tr>
        <?php
    }
    ?>
</table>

<style>
    td, th {
        padding: 20px;
    }

    th {
        background: #67acd6;
        color: #000;
    }

    td {
        background: #d6d6d6;
    }
</style>