<?php

class ConcreteBigHouseBuilder implements BuilderInterface
{
    private $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function buildWalls()
    {
        $this->house->walls = 4;
    }

    public function buildRoof()
    {
        $this->house->roof = 'Metal';
    }

    public function buildWindows()
    {
        $this->house->windows = 6;
    }

    public function getHouse()
    {
        return $this->house;
    }
}