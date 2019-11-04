<?php

require_once 'HighWay.php';
final class PedestrianWay
{
    protected $maxSpeed = 10;
    protected $nbLane = 1;


    public function addVehicle($vehicle)
    {
        if (($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) {
            parent::setcurrentVehicles($vehicle);
        }
    }
}