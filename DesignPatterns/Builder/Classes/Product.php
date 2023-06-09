<?php

namespace Patterns\Builder\Classes;

/**
 * Какой-то продукт
 */
class Product
{
    
    /**
     * @var string
     */
    private $name;
    
    
    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }
}