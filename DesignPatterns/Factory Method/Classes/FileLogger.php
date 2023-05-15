<?php

namespace Patterns\FactoryMethod\Classes;

use Patterns\FactoryMethod\Interfaces\LoggerInterface;

class FileLogger implements LoggerInterface
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}