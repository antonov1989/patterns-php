<?php

namespace Patterns\FactoryMethod\Factories;

use Patterns\FactoryMethod\Interfaces\LoggerFactoryInterface;
use Patterns\FactoryMethod\Interfaces\LoggerInterface;
use Patterns\FactoryMethod\Classes\FileLogger;

class FileLoggerFactory implements LoggerFactoryInterface
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): LoggerInterface
    {
        return new FileLogger($this->filePath);
    }
}