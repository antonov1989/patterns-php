<?php

namespace Patterns\Classes\Windows;

use \Patterns\Interfaces\ButtonInterface;

/**
 * Конкретные продукты создаются соответствующими Конкретными Фабриками.
 */
class WindowsButton implements ButtonInterface
{
    public function drow(): string
    {
        return "The result of the Windows Button.";
    }
}