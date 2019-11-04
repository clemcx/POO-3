<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane=4;
    /**
     * @var int
     */
    protected $maxSpeed=130;

    public function addVehicle(Vehicle $car)
    {
        if ($car instanceof Car){
            array_push($this->currentVehicles,$car);
            return 'this vehicle can go on the motorway';
        }
        else {
            return 'this vehicle cannot go on the motorway';
        }
    }
}