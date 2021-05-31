<?php
session_start();
?>

<h1>Добро пожаловать, <?php
    echo $_SESSION["name"];
    ?>
</h1>
<button type="button" onclick="location.href='logout.php'">Выход</button>