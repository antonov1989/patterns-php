<?php

namespace Patterns\FactoryMethod\Classes;

use Patterns\FactoryMethod\Interfaces\LoggerInterface;

class StdoutLogger implements LoggerInterface
{
    public function log(string $message)
    {
        echo $message;
    }
}