<?php
require_once 'HighWay.php';


final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
    }

    public function addVehicle(Vehicle $vehicle)

    {
        if ($vehicle instanceof Bicycle) {
             echo $message = 'il n\'est pas possible de rouler à vélo sur l\'autoroute';
        }else{
        $this->currentVehicle[]= $vehicle;
    }
    }
}