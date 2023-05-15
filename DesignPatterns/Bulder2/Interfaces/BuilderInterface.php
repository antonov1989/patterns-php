<?php

namespace Patterns\Builder2\Interfaces;

/**
 * Интерфейс Строителя объявляет создающие методы для различных частей объектов
 * Продуктов.
 */
interface BuilderInterface
{
    public function producePartA(): void;
    
    public function producePartB(): void;
    
    public function producePartC(): void;
}
