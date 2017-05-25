<?php

/**
 * Created by PhpStorm.
 * User: Кайзер
 * Date: 25.05.2017
 * Time: 15:03
 */
require_once "Vehicle.php";
require_once "Driver.php";
require_once "Route.php";
require_once "Dispatcher.php";
class Order
{
    public static function newOrder(array $routes, array $drivers, array $cars, array $dispatchers)
    {
        $randomDriver = array_rand($drivers, 1);
        $driver = $drivers[$randomDriver];
        $randomDispatcher = array_rand($dispatchers, 1);
        $dispatcher = $dispatchers[$randomDispatcher];
        $randomCar = array_rand($cars, 1);
        $car = $cars[$randomCar];
        $randomRoute = array_rand($routes, 1);
        $route = $routes[$randomRoute];
        echo "Диспетчер по имени " . $dispatcher . " назначил водителя по имени " . $driver . " на маршрут " . $route . " на автомобиле " . $car . ".<br>";
    }

}