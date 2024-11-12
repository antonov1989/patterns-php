<?php

/**
 * Strategy (Стратегия) — позволяет определять семейство схожих алгоритмов,
 * помещать их в собственные классы и делать их взаимозаменяемыми.
 * Паттерн позволяет изменять поведение объекта без изменения его кода.
 */

use DesignPatterns\BehavioralPatterns\Strategy\Classes\CourierDelivery;
use DesignPatterns\BehavioralPatterns\Strategy\Classes\ExpressDelivery;
use DesignPatterns\BehavioralPatterns\Strategy\Classes\Order;
use DesignPatterns\BehavioralPatterns\Strategy\Classes\PostDelivery;

$order = new Order();

// Устанавливаем стратегию доставки курьером
$order->setDeliveryStrategy(new CourierDelivery());
echo "Стоимость доставки курьером: " . $order->calculateDeliveryCost(5) . " грн\n"; // 50 грн

// Меняем стратегию на доставку почтой
$order->setDeliveryStrategy(new PostDelivery());
echo "Стоимость доставки почтой: " . $order->calculateDeliveryCost(5) . " грн\n"; // 25 грн

// Экспресс-доставка
$order->setDeliveryStrategy(new ExpressDelivery());
echo "Стоимость экспресс-доставки: " . $order->calculateDeliveryCost(5) . " грн\n"; // 100 грн