<?php
 require_once 'Vehicle.php';

/**
 * class HighWay
 */
abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicles=array();
        /**
     * @var int
     */
    protected $nbLane;
    /**
     * @var int
     */
    protected $maxSpeed;

    /**
     * @return array
     */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     */
    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**$nbLane
     * @param int $nbLane
     * @return int
     */
    public function setNbLane(int $nbLane): int
    {
       return $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     * @return int
     */
    public function setMaxSpeed(int $maxSpeed): int
    {
       return $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);

}