<?php

namespace DesignPatterns\BehavioralPatterns\Strategy\Classes;

use DesignPatterns\BehavioralPatterns\Strategy\Interfaces\DeliveryStrategyInterface;

class ExpressDelivery implements DeliveryStrategyInterface {
    public function calculate(int $weight) {
        return $weight * 20; // Например, цена за кг
    }
}