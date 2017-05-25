<?php

/**
 * Created by PhpStorm.
 * User: Кайзер
 * Date: 23.05.2017
 * Time: 1:34
 */
require_once "Driver.php";

class Vehicle
{
    private $vehicle;

    public function __construct(string $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function fixVehicle(): bool
    {
        if (Driver::requestRepair()) {
            return false;
        }
        return true;

    }

    /**
     * @return string
     */
    public function getVehicle(): string
    {
        if ($this->fixVehicle()) {
            return $this->vehicle;
        } else {
            echo $this->vehicle . " сломан и находится в ремонте." . "<br>";
        }
    }
    public function __toString() {
        return "{$this->vehicle}";
    }
}