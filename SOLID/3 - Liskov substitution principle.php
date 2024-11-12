<?php

/**
 * 3. LSP (Liskov substitution principle) - Принцип подстановки Барбары Лисков
 *
 * Щоб досягти виконання принципу Барбари Лісков у PHP:
 *
 * Дотримуйтесь єдності інтерфейсів.
 * Переконайтеся, що підкласи не порушують поведінку батьківських класів.
 * Уникайте надмірного перевизначення методів.
 * Завжди дотримуйтесь контракту методів базових класів.
 * Використовуйте інтерфейси для інверсії залежностей.
 *
 * Предусловие - когда в классе BunnySpeed extend AnimalSpeed
 * стоит условие что передаваемая скорость не может быть больше 100
 * и вываливаеться ексепшен
 *
 * Постусловие - когда в классе Squere extends Ractengle
 * в поиске площади ищем не по 2 функциям setWidth setHeight а выставляем оба параметра в одной
 * или возвращаем не тот тип ответа
 */

// Start data - create a child class
class AreaCalculator {
    public function sum(): number
    {
        $area = 111; //....
        return $area;
    }
}

class VolumeCalculator extends AreaCalulator {
    public function __construct($shapes = array()) {
        parent::__construct($shapes);
    }
    
    public function sum() {
        // logic to calculate the volumes and then return and array of output
        $summedData = 0;

        return array($summedData);
    }
}

/**
 * В классі AreaCalulator метод sum повертав число, а тут массив
 */
class VolumeCalculatorNew extends AreaCalulator {
    public function __construct($shapes = array()) {
        parent::__construct($shapes);
    }
    
    public function sum(): number {
        // logic to calculate the volumes and then return and array of output
        $summedData = 0;

        return $summedData;
    }
}