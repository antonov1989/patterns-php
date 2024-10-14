<?php

namespace Patterns\Builder\Factories;

use Patterns\Builder\Classes\Builder\Builder;

/**
 * Какая-то фабрика
 */
class Factory
{
    
    /**
     * @var Builder
     */
    private $builder;
    
    
    /**
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
        $this->builder->buildProduct();
    }
    
    /**
     * Возвращает созданный продукт
     *
     * @return Product
     */
    public function getProduct()
    {
        return $this->builder->getProduct();
    }
}