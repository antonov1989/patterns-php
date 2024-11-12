<?php

namespace DesignPatterns\BehavioralPatterns\Strategy\Classes;

use DesignPatterns\BehavioralPatterns\Strategy\Interfaces\DeliveryStrategyInterface;

class PostDelivery implements DeliveryStrategyInterface {
    public function calculate(int $weight) {
        return $weight * 5; // Например, цена за кг
    }
}