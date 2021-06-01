<?php
?>

<form action="vendor/add_product.php" method="post" id="products">
    <p>Название товара</p>
    <input type="text" name="name">
    <p>Описание товара</p>
    <textarea name="description"></textarea> <br><br>
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
