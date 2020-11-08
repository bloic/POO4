<?php

// Cars.php
require_once 'Vehicle.php';

class Cars extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
// Do not modify the rest of the file

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var boolean
     */
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color,$nbSeats);
        $this->energy = $energy;
    }

    public function start()
    {
        if( $this->hasParkBrake === true) {
            throw new Exception('attention the brake is always engaged');
        } else {
            $message = 'the brake isn\'t engaged';
        }
        return $message;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @return bool
     */
    public function isHasParkBrake(bool $hasParkBrake) : bool
    {
        return $this->hasParkBrake;
    }
    public function getHasParkBrake()
    {
        return $this->hasParkBrake ;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }
}