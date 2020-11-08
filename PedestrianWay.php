<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Cars || $vehicle instanceof Truck ){
            $message = 'les voitures ne sont pas autorisé';
        }else{
            $this->currentVehicle[]= $vehicle;
        }
    }
}