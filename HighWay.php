<?php


abstract class HighWay
{
    /**
     * @var array
     */

    protected $currentVehicle= [];

    /**
     * @var integer
     */
    protected $nbLane;

    /**
     * @var integer
     */
    protected $maxSpeed;


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }


    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return array
     */
    public function getCurrentVehicle()
    {
        return $this->currentVehicle;
    }

    /**
     * @param array $currentVehicle
     */
    public function setCurrentVehicle($currentVehicle)
    {
        $this->currentVehicle = $currentVehicle;
    }

    /**
     * @return int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    abstract public function addVehicle(Vehicle $vehicle);

}