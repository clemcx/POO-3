<?php
require_once('../src/class/Autoloader.php');
Autoloader::register();

$toto = new Car('blue',4,'diesel',100);
$BlueLane = new MotorWay();
echo $BlueLane->addVehicle($toto);
echo '<br>';
echo $toto->switchOff();
echo '<br>';
echo $toto->switchOn();


echo '<br>';
$red = new Bicycle('red',1);
$red->setCurrentSpeed(15);
echo $BlueLane->addVehicle($red);
echo '<br>';
 echo $red->switchOff();
 echo '<br>';
echo $red->switchOn();

