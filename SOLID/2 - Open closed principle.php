<?php

/**
 * 2. OCP (Open/closed principle) - Принцип открытости/закрытости
 */

// Start data

class Circle {
    public $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
}

class Square {
    public $length;
    
    public function __construct($length) {
        $this->length = $length;
    }
}

class AreaCalculator {
    public function sum() {
        foreach($this->shapes as $shape) {
            if(is_a($shape, 'Square')) {
                $area[] = pow($shape->length, 2);
            } else if(is_a($shape, 'Circle')) {
                $area[] = pi() * pow($shape->radius, 2);
            }
        }
        
        return array_sum($area);
    }
}

/**
 * Если мы захотим суммировать площади для большего количества фигур,
 * нам прийдется добавить больше if/else блоков и это идет вразрез с принципом открытости/закрытости
 */

interface ShapeInterface {
    public function area();
}

class Circle implements ShapeInterface {
    public $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

class Square implements ShapeInterface {
    public $length;
    
    public function __construct($length) {
        $this->length = $length;
    }
    
    public function area() {
        return pow($this->length, 2);
    }
}

class AreaCalculator {
    public function sum() {
        foreach($this->shapes as $shape) {
            if(is_a($shape, 'ShapeInterface')) {
                $area[] = $shape->area();
                continue;
            }
            
            throw new AreaCalculatorInvalidShapeException;
        }
        
        return array_sum($area);
    }
}