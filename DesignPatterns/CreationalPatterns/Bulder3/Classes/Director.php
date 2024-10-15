<?php

// Директор - керує процесом будівництва
class Director
{
    private $builder;

    public function setBuilder(BuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function buildHouse()
    {
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildWindows();
    }
}