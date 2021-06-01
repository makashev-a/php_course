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
            <td><?= $product["category"] ?></td>
            <td><?= $product["price"] ?></td>
            <td><a href="product.php?id=<?= $product["id"] ?>">Просмотреть подробно</a></td>
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
