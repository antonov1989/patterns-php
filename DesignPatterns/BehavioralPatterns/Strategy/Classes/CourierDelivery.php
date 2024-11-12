<?php

namespace DesignPatterns\BehavioralPatterns\Strategy\Classes;

use DesignPatterns\BehavioralPatterns\Strategy\Interfaces\DeliveryStrategyInterface;

class CourierDelivery implements DeliveryStrategyInterface {
    public function calculate(int $weight) {
        return $weight * 10; // Например, цена за кг
    }
}