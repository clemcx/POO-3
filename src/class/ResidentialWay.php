<?php

require_once 'HighWay.php';
final class ResidentialWay extends HighWay
{

    public function addVehicle(Vehicle $vehicle)
    {
    if ($vehicle instanceof Vehicle){
    array_push($this->currentVehicles,$vehicle);
    }
}
}