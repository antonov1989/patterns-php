<?php

/**
 * 1. SPR (Single responsibility principle) - Принцип единственной обязанности
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
    
    protected $shapes;
    
    public function __construct($shapes = array()) {
        $this->shapes = $shapes;
    }
    
    public function sum() {
        // logic to sum the areas
    }
    
    public function output() {
        return implode('', array(
            "<h1>",
            "Sum of the areas of provided shapes: ",
            $this->sum(),
            "</h1>"
        ));
    }
}

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6)
);

$areas = new AreaCalculator($shapes);

echo $areas->output();

/**
 * Проблема в тому що AreaCalculator виконує 2 функції: підрахунок площі та вивод данних
 * Треба створити класс SumCalculatorOutputter
 */

class AreaCalculator {
    
    protected $shapes;
    
    public function __construct($shapes = array()) {
        $this->shapes = $shapes;
    }
    
    public function sum() {
        // logic to sum the areas
    }
}

class SumCalculatorOutputter {
    protected $areas;
    
    public function __construct($areas) {
        $this->areas = $areas;
    }
    
    public function HTML() {
        return implode('', array(
            "<h1>",
            "Sum of the areas of provided shapes: ",
            $this->areas->sum(),
            "</h1>"
        ));
    }
    
    public function JSON() {
        // JSON output
        return '';
    }
}

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6)
);

$areas = new AreaCalculator($shapes);
$output = new SumCalculatorOutputter($areas);

echo $output->JSON();
echo $output->HAML();
echo $output->HTML();
echo $output->JADE();