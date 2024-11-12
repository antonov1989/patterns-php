<?php

namespace DesignPatterns\BehavioralPatterns\Strategy\Interfaces;

interface DeliveryStrategyInterface {
    public function calculate(int $weight);
}