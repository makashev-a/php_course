<?php
?>

<form action="includes/add_product.php" method="POST" id="buy_toy">
    <label for="name">Название товара</label><br><br>
    <input id="name" type="text" name="name"><br><br>
    <label for="descr">Описание товара</label><br><br>
    <textarea id="descr" name="descr"></textarea>
    <br><br>
    <label for="category">Категория товара</label><br><br>
    <select id="category" name="category" form="buy_toy">
        <option value="">Мягкие игрушки</option>
        <option value="">Конструкторы</option>
        <option value="">Музыкальные</option>
    </select>
    <br><br>
    <label for="price">Цена товара</label><br><br>
    <input id="price" type="number" name="price"><br><br>
    <button type="submit">Сохранить</button><br><br>
</form>





