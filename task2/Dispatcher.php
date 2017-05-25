<?php

class Dispatcher
{
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function removeDriver($driverName)
    {
        return true;
    }
    public function __toString() {
        return "{$this->name}";
    }
}

