<?php
require "vendor/db.php";

$id = $_GET["id"];
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
$product = mysqli_fetch_assoc($product);
?>

<form action="vendor/update_product.php" method="post" id="update">
    <input type="hidden" name="id" value="<?= $product["id"] ?>">
    <p>Название товара</p>
    <input type="text" name="name" value="<?= $product["name"] ?>">
    <p>Описание товара</p>
    <textarea name="description"><?= $product["description"] ?></textarea>
    <p>Категория товара</p>
    <select name="category_id" form="update">
        <option selected value="<?= $product["category_id"] ?>"><?= $product["category_id"] ?></option>
        <?php
            for ($i = 1; $i <=4; $i++) {
                if ($product["category_id"] == $i) {
                    continue;
                }
                ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php
            }
        ?>

    </select>
    <p>Цена товара</p>
    <input type="number" name="price" value="<?= $product["price"] ?>">
    <button type="submit">Сохранить изменения</button>
</form>
