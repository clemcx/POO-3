<?php

require_once 'Vehicle.php';
class Bicycle extends Vehicle implements LightableInterface
{

    public function switchOn(): string
    {
       if($this->currentSpeed>10){
        return 'true';
       }
       return 'false';
    }

    public function switchOff(): string
    {
    return 'false';
    }
}