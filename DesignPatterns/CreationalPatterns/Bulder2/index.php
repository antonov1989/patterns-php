<?php

use \Patterns\Builder2\Classes\ProductBuilder;
use \Patterns\Builder2\Classes\Director;

/**
 * Клиентский код создаёт объект-строитель, передаёт его директору, а затем
 * инициирует процесс построения. Конечный результат извлекается из объекта-
 * строителя.
 */
function clientCode(Director $director)
{
    $builder = new ProductBuilder();
    $director->setBuilder($builder);
    
    echo "Standard basic product:\n";
    $director->buildMinimalViableProduct();
    $builder->getProduct()->listParts();
    
    echo "Standard full featured product:\n";
    $director->buildFullFeaturedProduct();
    $builder->getProduct()->listParts();
    
    // Помните, что паттерн Строитель можно использовать без класса Директор.
    echo "Custom product:\n";
    $builder->producePartA();
    $builder->producePartC();
    $builder->getProduct()->listParts();
}

$director = new Director();
clientCode($director);