<?php

/**
 * Created by PhpStorm.
 * User: Кайзер
 * Date: 15.05.2017
 * Time: 20:28
 */
interface CarRepositoryInterface
{
    public function getByMark(array $cars, string $mark): array;

    public function getByModel(array $cars, string $model, int $year): array;
}
