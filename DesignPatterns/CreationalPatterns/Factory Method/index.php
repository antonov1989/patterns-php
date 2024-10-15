<?php

/**
 * FactoryMethod - определяет общий интерфейс для создания объектов в суперклассе,
 * позволяя подклассам изменять тип создаваемых объектов.
 *
 * abstract class Creator {
 *   // Абстрактний метод, який повинен бути реалізований підкласами
 *   abstract public function factoryMethod(): Product;
 *   public function someOperation(): string {...}
 * }
 *
 * class ConcreteCreatorA extends Creator {
 *  public function factoryMethod(): Product {
 *    return new ConcreteProductA();
 *  }
 * }
 *
 * $creator = new ConcreteCreatorA();
 * $creator->someOperation()
 *
 *****************************
 *
 * Class FactoryMethodTest
 * Ще підійде приклад з підрахуванням периметра квадрат, ромба чи прямокутника,
 * де один фабричний метод буде робити це для різних классів
 */

// разные вариации, но реализация одна
$loggerFactory = new StdoutLoggerFactory();
//$loggerFactory = new FileLoggerFactory(sys_get_temp_dir());

// вызов фабричного метода
$logger = $loggerFactory->createLogger();
