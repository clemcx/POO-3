<?php
require_once('../src/class/Autoloader.php');
Autoloader::register();

$toto = new Car('blue',4,'diesel',100);
$BlueLane = new MotorWay();
echo $BlueLane->addVehicle($toto);

echo '<br>';
$red = new Bicycle('red',1);
 echo $BlueLane->addVehicle($red);
