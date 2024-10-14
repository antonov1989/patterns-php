<?php

namespace Patterns\FactoryMethod\Factories;

use Patterns\FactoryMethod\Interfaces\LoggerFactoryInterface;
use Patterns\FactoryMethod\Interfaces\LoggerInterface;
use Patterns\FactoryMethod\Classes\StdoutLogger;

class StdoutLoggerFactory implements LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface
    {
        return new StdoutLogger();
    }
}