<link rel="stylesheet" href="css/style.css">

<?php

require_once "Workers.php";

$worker = [
    "Name" => "Makashev Akhmadi",
    "Email" => "akhmadi@gmail.com",
    "Age" => 23,
    "Profession" => "Back-end Developer"
];

$worker2 = [
    "Name" => "John David",
    "Email" => "jdavid@gmail.com",
    "Age" => 24,
    "Profession" => "Front-end Developer"
];

Workers::create_worker($worker);
Workers::create_worker($worker2);
$all_workers = Workers::count_workers();
?>
<div>
    <h1>Number of workers: <?= $all_workers["workers_count"] ?></h1>
    <hr>
    <?php
    foreach ($all_workers["all_workers"] as $worker) {
        ?>
        <h1>Name: <?= $worker["Name"] ?></h1>
        <h1>Email: <?= $worker["Email"] ?></h1>
        <h1>Age: <?= $worker["Age"] ?></h1>
        <h1>Profession: <?= $worker["Profession"] ?></h1>
        <h1>Register time: <?= $worker["register_time"] ?></h1>
        <hr>
        <?php
    }
    ?>
</div>

<?php
Workers::save_workers();

$find = Workers::find("akhmadi@gmail.com");
if (!empty($find)) {
    ?>
    <div>
        <h1>Worker was found</h1>
        <h1>Name: <?= $find["Name"] ?></h1>
        <h1>Email: <?= $find["Email"] ?></h1>
        <h1>Age: <?= $find["Age"] ?></h1>
        <h1>Profession: <?= $find["Profession"] ?></h1>
        <h1>Register time: <?= $find["register_time"] ?></h1>
    </div>
    <?php
} else {
    ?>
    <div>
        <h1>Worker was not found</h1>
    </div>
    <?php
}
?>