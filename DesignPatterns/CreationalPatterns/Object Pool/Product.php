<?php

class Product
{
    
    /**
     * @var integer|string
     */
    protected $id;
    
    
    public function __construct($id) {
        $this->id = $id;
    }
    
    /**
     * @return integer|string
     */
    public function getId()
    {
        return $this->id;
    }
}