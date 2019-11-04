<?php

require_once 'Vehicle.php';


class Car extends Vehicle{

     const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];



    private $energy;

    private $energyLevel;

    private $stockCapacity;

    private $stock;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {

        parent::__construct( $color,  $nbSeats);
        $this->energy = $energy;
        $this->stockCapacity = $stockCapacity;

    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES, true)) {
            $this->energy = $energy;
        }
        return $this;
    }



    public function getEnergy(): string
    {
        return $this->energy;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity (int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock (int $stock): void
    {
        $this->stock = $stock;
    }

    public function isFullOrNot(): string
    {
        $sentence = "";
        if ($this->stock >= $this->stockCapacity) {
            $sentence .= ' full.';
        } else {
            $sentence .=' in filling...';
        }
        return $sentence;
    }
}
