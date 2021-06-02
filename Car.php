<?php

class Car
{

    private string $model;
    private string $color;
    private int $horsepower;
    private int $production_year;

    public function __construct($model, $color, $horsepower, $production_year)
    {
        $this->model = $model;
        $this->color = $color;
        $this->horsepower = $horsepower;
        $this->production_year = $production_year;
    }

    public function show_car()
    {
        ?>
        <div>
            <h1>Модель машины: <?= $this->model ?></h1>
            <p><b>Цвет машины:</b><span class="circle" style="background-color: <?= $this->color ?>;"></span></p>
            <p><b>Кол-во л.с.:</b> <?= $this->horsepower ?></p>
            <p><b>Налог:</b> <?= round($this->calculate_tax()) . " тг" ?></p>
            <p><b>Год выпуска:</b> <?= $this->production_year ?></p>
        </div>
        <br>
        <?php
    }

    private function calculate_tax()
    {
        if ($this->horsepower >= 150) {
            return $this->horsepower * 50 / 3;
        } elseif ($this->horsepower >= 250) {
            return $this->horsepower * 80 / 3;
        }
        return $this->horsepower * 30 / 3;
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