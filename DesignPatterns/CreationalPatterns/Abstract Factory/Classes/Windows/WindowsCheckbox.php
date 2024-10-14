<?php

namespace Patterns\Classes\Windows;

use \Patterns\Interfaces\CheckboxInterface;

/**
 * Конкретные продукты создаются соответствующими Конкретными Фабриками.
 */
class WindowsCheckbox implements CheckboxInterface
{
    public function drow(): string
    {
        return "The result of the Windows Checkbox.";
    }
}