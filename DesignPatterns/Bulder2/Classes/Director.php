<?php

namespace Patterns\Builder2\Classes;

use Patterns\Builder2\Interfaces\BuilderInterface;

/**
 * Директор отвечает только за выполнение шагов построения в определённой
 * последовательности. Это полезно при производстве продуктов в определённом
 * порядке или особой конфигурации. Строго говоря, класс Директор необязателен,
 * так как клиент может напрямую управлять строителями.
 */
class Director
{
    /**
     * @var BuilderInterface
     */
    private $builder;
    
    /**
     * Директор работает с любым экземпляром строителя, который передаётся ему
     * клиентским кодом. Таким образом, клиентский код может изменить конечный
     * тип вновь собираемого продукта.
     */
    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }
    
    /**
     * Директор может строить несколько вариаций продукта, используя одинаковые
     * шаги построения.
     */
    public function buildMinimalViableProduct(): void
    {
        $this->builder->producePartA();
    }
    
    public function buildFullFeaturedProduct(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }
}