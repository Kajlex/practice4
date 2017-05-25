<?php
require_once "Vehicle.php";
require_once "Driver.php";
require_once "Route.php";
require_once "Dispatcher.php";
require_once "Order.php";

$car1 = new Vehicle("Audi");
$car2 = new Vehicle("BMW");
$car3 = new Vehicle("Chevrolet");
$car4 = new Vehicle("Ford");
$car5 = new Vehicle("Opel");
$car6 = new Vehicle("Skoda");
$car7 = new Vehicle("Renault");
$car8 = new Vehicle("Geely");
$car9 = new Vehicle("Dacia");
$car10 = new Vehicle("Mersedes");
$cars = [$car1, $car2, $car3, $car4, $car5, $car6, $car7, $car8, $car9, $car10];

$driver1 = new Driver("Николай");
$driver2 = new Driver("Владимир");
$driver3 = new Driver("Петр");
$driver4 = new Driver("Евгений");
$driver5 = new Driver("Артем");
$driver6 = new Driver("Александр");
$driver7 = new Driver("Алексей");
$driver8 = new Driver("Антон");
$driver9 = new Driver("Дмитрий");
$driver10 = new Driver("Сергей");
$drivers = [$driver1, $driver2, $driver3, $driver4, $driver5, $driver6, $driver7, $driver8, $driver9, $driver10];

$route1 = new Route("Харьков", "Днепр");
$route2 = new Route("Харьков", "Запорожье");
$route3 = new Route("Харьков", "Полтава");
$route4 = new Route("Харьков", "Сумы");
$route5 = new Route("Харьков", "Киев");
$route6 = new Route("Харьков", "Львов");
$route7 = new Route("Харьков", "Черновцы");
$route8 = new Route("Харьков", "Винница");
$route9 = new Route("Харьков", "Одесса");
$route10 = new Route("Харьков", "Белгород");
$routes = [$route1, $route2, $route3, $route4, $route5, $route6, $route7, $route8, $route9, $route10];

$dispatcher1 = new Dispatcher("Роман");
$dispatcher2 = new Dispatcher("Василий");
$dispatcher3 = new Dispatcher("Юрий");
$dispatchers = [$dispatcher1, $dispatcher2, $dispatcher3];


Order::newOrder($routes, $drivers, $cars, $dispatchers);



