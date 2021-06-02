<?php

class Equation
{
    private int $a;
    private int $b;
    private int $c;
    private int $d;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    private function discriminant()
    {
        $this->d = ($this->b ** 2) - (4 * $this->a * $this->c);
        return $this->d;
    }

    private function x1()
    {
        return round((-$this->b + sqrt($this->d)) / (2 * $this->a), 1);
    }

    private function x2()
    {
        return round((-$this->b - sqrt($this->d)) / (2 * $this->a), 1);
    }

    public function result()
    {
        $result = [
            "D" => $this->discriminant(),
            "x1" => $this->x1(),
            "x2" => $this->x2()
        ];

        ?>

        <div>
            <?php
            foreach ($result as $key => $item) {
                echo "<h1>$key = $item</h1>";
            }
            ?>
        </div>
        <?php
    }

}