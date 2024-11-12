<?php

/**
 * Builder - позволяет создавать сложные объекты пошагово.
 * Строитель даёт возможность использовать один и тот же код строительства
 * для получения разных представлений объектов.
 *
 * Director - отвечает за этапы строительства: котлован, фундамент, стены, крыша
 * BuilderInterface - отвечает за методы строительства - кладка кирпича, установка окон
 * Builder - экземпляр который устанавливает конкретную вариацию продукта
 * Product - готовый продукт зависящий от данных билдера
 */

//$builder = new ConcreteSmallHouseBuilder();
$builder = new ConcreteBigHouseBuilder();
$director = new Director();
$director->setBuilder($builder);

// Створюємо будинок
$director->buildHouse();
$house = $builder->getHouse();
$house->show();