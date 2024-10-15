<?php

namespace Patterns\Bulder3\Classes;

use BuilderInterface;
use House;

class ConcreteSmallHouseBuilder implements BuilderInterface
{
    private $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function buildWalls()
    {
        $this->house->walls = 1;
    }

    public function buildRoof()
    {
        $this->house->roof = 'Metal';
    }

    public function buildWindows()
    {
        $this->house->windows = 3;
    }

    public function getHouse()
    {
        return $this->house;
    }
}