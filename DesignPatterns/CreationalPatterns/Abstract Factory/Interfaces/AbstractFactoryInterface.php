<?php

namespace Patterns\Interfaces;

use Patterns\Interfaces\ButtonInterface as ButtonInterface;
use Patterns\Interfaces\CheckboxInterface as CheckboxInterface;

/**
* Интерфейс Абстрактной Фабрики объявляет набор методов, которые возвращают
* различные абстрактные продукты. Эти продукты называются семейством и связаны
* темой или концепцией высокого уровня. Продукты одного семейства обычно могут
* взаимодействовать между собой. Семейство продуктов может иметь несколько
* вариаций, но продукты одной вариации несовместимы с продуктами другой.
*/
interface AbstractFactoryInterface
{
    public function createButton(): ButtonInterface;
    
    public function createCheckbox(): CheckboxInterface;
}