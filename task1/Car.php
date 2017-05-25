<?php

class Car
{
    public $id;
    public $mark;
    public $model;
    public $year;
    public $color;
    public $price;
    public $regNum;

    public function __construct(int $id, string $mark, string $model, int $year, string $color, int $price, string $regNum)
    {
        $this->id = $id;
        $this->mark = $mark;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->price = $price;
        $this->regNum = $regNum;
    }


}


