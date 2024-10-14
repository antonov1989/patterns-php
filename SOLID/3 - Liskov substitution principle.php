<?php

/**
 * 3. LSP (Liskov substitution principle) - Принцип подстановки Барбары Лисков
 */

// Start data - create a child class
class VolumeCalculator extends AreaCalulator {
    public function __construct($shapes = array()) {
        parent::__construct($shapes);
    }
    
    public function sum() {
        // logic to calculate the volumes and then return and array of output
        return array($summedData);
    }
}

/**
 * В классі AreaCalulator метод sum повертав число, а тут массив
 */
class VolumeCalculator extends AreaCalulator {
    public function __construct($shapes = array()) {
        parent::__construct($shapes);
    }
    
    public function sum(): number {
        // logic to calculate the volumes and then return and array of output
        return $summedData;
    }
}