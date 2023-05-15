<?php

namespace Patterns\Classes\Mac;

use \Patterns\Interfaces\CheckboxInterface;

/**
 * Конкретные продукты создаются соответствующими Конкретными Фабриками.
 */
class MacCheckbox implements CheckboxInterface
{
    public function drow(): string
    {
        return "The result of the Mac Checkbox.";
    }
}