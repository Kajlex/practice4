<?php

/**
 * Created by PhpStorm.
 * User: Кайзер
 * Date: 23.05.2017
 * Time: 1:34
 */
class Route
{
    private $source;
    private $destination;

    public function __construct(string $source, string $destination)
    {
        $this->source = $source;
        $this->destination = $destination;
    }
    public function __toString() {
        return "{$this->source}" . " - " . "{$this->destination}";
    }

}