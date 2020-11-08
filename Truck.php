<?php


require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var integer
     */
    private $capacity;

    /**
     * @var integer
     */
    private $loading;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity, int $loading = 0)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
        if ($loading >= 0) {
            $this->loading = $loading;
        }


    }

    public function getCapacity(): int
    {
        return $this->capacity;

    }


    public function getLoading(): int
    {
        return $this->loading;

    }

    public function setLoading(int $loading): int
    {
        if ($loading >= 0) {
            $this->loading = $loading;
        }
    }


    public function infilling(): string
    {
        $this->loading = 90;
        return "Go !";
    }

    public function loading(): string
    {
        $sentence = "";
        while ($this->loading < $this->capacity) {
            $this->loading++;
            $sentence .= "in filling";
        }

        $sentence .= "full";
        return $sentence;
    }
}
