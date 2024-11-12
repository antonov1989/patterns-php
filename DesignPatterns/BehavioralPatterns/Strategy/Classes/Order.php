<?php

namespace DesignPatterns\BehavioralPatterns\Strategy\Classes;

use DesignPatterns\BehavioralPatterns\Strategy\Interfaces\DeliveryStrategyInterface;

class Order
{
    private $deliveryStrategy;

    // Устанавливаем стратегию доставки через метод
    public function setDeliveryStrategy(DeliveryStrategyInterface $strategy) {
        $this->deliveryStrategy = $strategy;
    }

    // Рассчитываем стоимость доставки
    public function calculateDeliveryCost($weight) {
        return $this->deliveryStrategy->calculate($weight);
    }
}