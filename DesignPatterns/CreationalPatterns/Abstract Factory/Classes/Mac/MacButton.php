<?php

namespace Patterns\Classes\Mac;

use \Patterns\Interfaces\ButtonInterface;

/**
 * Конкретные продукты создаются соответствующими Конкретными Фабриками.
 */
class MacButton implements ButtonInterface
{
    public function drow(): string
    {
        return "The result of the Mac Button.";
    }
}