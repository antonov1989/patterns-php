<?php

$builder = new ConcreteBigHouseBuilder();
$director = new Director();
$director->setBuilder($builder);

// Створюємо будинок
$director->buildHouse();
$house = $builder->getHouse();
$house->show();