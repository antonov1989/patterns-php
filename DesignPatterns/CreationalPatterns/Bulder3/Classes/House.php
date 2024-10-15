<?php

//product
class House
{
    public $walls;
    public $roof;
    public $windows;

    public function show()
    {
        echo "House with $this->walls walls, $this->roof roof, and $this->windows windows.";
    }
}