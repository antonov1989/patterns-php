<?php

/**
 * Абстракта фабрика - позволяет создавать семейства связанных объектов,
 * не привязываясь к конкретным классам создаваемых объектов.
 *
 * Фабики завязанны на AbstractFactoryInterface,
 * которые при реализации делают необходимые прордукты/действия
 */

//$factory = new \Patterns\Factories\WindowsFactory();
$factory = new \Patterns\Factories\MacFactory();
$button = $factory->createButton();
$checkbox = $factory->createCheckbox();

echo 'Show checkbox';
echo $checkbox->drow();
echo 'Show button';
echo $button->drow();