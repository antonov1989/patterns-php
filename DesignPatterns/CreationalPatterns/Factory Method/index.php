<?php

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\Factories\FileLoggerFactory;
use Patterns\FactoryMethod\Factories\StdoutLoggerFactory;

/**
 * Class FactoryMethodTest
 * Ще підійде приклад з підрахуванням периметра квадрат, ромба чи прямокутника,
 * де один фабричний метод буде робити це для різних классів
 */
class FactoryMethodTest
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
    
        $logger->log('Stdout logger');
    }
    
    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();
    
        $logger->log('File logger');
    }
}