<?php

/**
 * Created by PhpStorm.
 * User: Кайзер
 * Date: 15.05.2017
 * Time: 21:18
 */
require_once "CarRepositoryInterface.php";
class CarRepository implements CarRepositoryInterface
{
    public function getByMark(array $cars, string $mark): array
    {
        $autoByMark = [];
        foreach ($cars as $car) {
            if ($car->mark == strval($mark)) {
                $autoByMark[] = $car;
            }
        }
        return $autoByMark;

    }

    public function getByModel(array $cars, string $model, int $expluatationYears): array
    {
        $autoByModel = [];
        foreach ($cars as $car) {
            if ($car->model == strval($model) && $car->year <= $expluatationYears) {
                $autoByModel[] = $car;
            }
        }
        return $autoByModel;
    }
}