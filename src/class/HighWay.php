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
     */
    public function setNbLane(int $nbLane): HighWay
    {
        $this->nbLane = $nbLane;
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
     * @return HighWay
     */
    public function setMaxSpeed(int $maxSpeed): HighWay
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);

}