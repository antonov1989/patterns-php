<?php

/**
 * 4. ISP (Interface segregation principle) - Принцип разделения интерфейса
 */

// Start data
interface ShapeInterface {
    public function area();
    public function volume();
}

/**
 * Один інтерфейс виконує багато функцій
 */

interface ShapeInterface {
    public function area();
}

interface SolidShapeInterface {
    public function volume();
}

class Cuboid implements ShapeInterface, SolidShapeInterface {
    public function area() {
        // calculate the surface area of the cuboid
    }
    
    public function volume() {
        // calculate the volume of the cuboid
    }
}