<?php

namespace Patterns\Factories;

use Patterns\Interfaces\AbstractFactoryInterface;
use Patterns\Interfaces\ButtonInterface;
use Patterns\Interfaces\CheckboxInterface;

use Patterns\Classes\Mac\MacButton;
use Patterns\Classes\Mac\MacCheckbox;

/**
 * Конкретная Фабрика производит семейство продуктов одной вариации. Фабрика
 * гарантирует совместимость полученных продуктов. Обратите внимание, что
 * сигнатуры методов Конкретной Фабрики возвращают абстрактный продукт, в то
 * время как внутри метода создается экземпляр конкретного продукта.
 */
class MacFactory implements AbstractFactoryInterface
{
    public function createButton(): ButtonInterface
    {
        return new MacButton();
    }
    
    public function createCheckbox(): CheckboxInterface
    {
        return new MacCheckbox();
    }
}