<?php

namespace Patterns\FactoryMethod\Interfaces;

interface LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface;
}