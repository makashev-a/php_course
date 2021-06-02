<?php

class Car
{

    public string $model;
    public string $color;
    public string $horsepower;
    public string $production_year;

    public function show_car()
    {
        ?>
        <p><b>Модель машины:</b> <?= $this->model ?></p>
        <p><b>Цвет машины:</b> <?= $this->color ?></p>
        <p><b>Кол-во л.с.:</b> <?= $this->horsepower ?></p>
        <p><b>Год выпуска:</b> <?= $this->production_year ?></p>
        <hr>
        <?php
    }

    public function save_car()
    {
        $fp = fopen("reports/" . "$this->model" . "_" . "$this->production_year" . ".txt", "w");
        $car = <<<INFO
        Модель машины: $this->model
        Цвет машины: $this->color
        Кол-во л.с.: $this->horsepower
        Год выпуска: $this->production_year
        INFO;
        fwrite($fp, $car);
        fclose($fp);
    }
}