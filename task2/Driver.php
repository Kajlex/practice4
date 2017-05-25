<?php

/**
 * Created by PhpStorm.
 * User: Кайзер
 * Date: 23.05.2017
 * Time: 1:34
 */
class Driver
{
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public static function requestRepair() : bool
    {
        return true;
    }
    public static function routeSuccess() : bool
    {
        return true;
    }
    public static function carCondition() : bool
    {
        return true;
    }
    public function __toString() {
        return "{$this->name}";
    }
}