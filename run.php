<table>
    <tr>
        <th>ID</th>
        <th>Название товара</th>
        <th>Категория товара</th>
        <th>Цена товара</th>
    </tr>
    <?php

    require "vendor/db.php";

    $products = mysqli_query($connect, "SELECT * FROM `products`");
    $products = mysqli_fetch_all($products, MYSQLI_ASSOC);

    foreach ($products as $product) {
        ?>
        <tr>
            <td><?= $product["id"] ?></td>
            <td><?= $product["name"] ?></td>
            <td><?= $product["category_id"] ?></td>
            <td><?= $product["price"] ?></td>
            <td><a href="product.php?id=<?= $product["id"] ?>">Просмотреть подробно</a></td>
            <td><a href="product_edit.php?id=<?= $product["id"] ?>">Изменить</a></td>
            <td><a href="vendor/delete_product.php?id=<?= $product["id"] ?>">Удалить</a></td>
        </tr>
        <?php
    }

    ?>
</table>

<style>
    table {
        font-size: 20px;
    }

    th {
        padding: 8px;
        background-color: #e8e8e8;
    }

    td {
        padding: 8px;
    }
</style>

<form action="vendor/add_product.php" method="post" id="products">
    <p>Название товара</p>
    <input type="text" name="name">
    <p>Описание товара</p>
    <textarea name="description"></textarea> <br><br>
    <p>Категория товара</p>
    <select name="category_id" form="products">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <p>Цена товара</p>
    <input type="number" name="price"> <br><br>
    <button type="submit">Опубликовать пост</button>
</form>