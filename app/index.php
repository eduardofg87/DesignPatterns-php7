<?php

namespace App;

require_once dirname(__DIR__) .'../vendor/autoload.php';
use App\SimpleFactory\DoorFactory as DoorFactory;
use App\FactoryMethod\MarketingManager as MarketingManager;
use App\FactoryMethod\DevelopmentManager as DevelopmentManager;


$door = DoorFactory::makeDoor(100, 200);
echo 'Width: ' . $door->getWidth();
echo 'Height: ' . $door->getHeight();

//Factory Method
$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Output: Asking about design patterns

$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Output: Asking about community building.