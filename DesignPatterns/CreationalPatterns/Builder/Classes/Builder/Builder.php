<?php

namespace Patterns\Builder\Classes\Builder;

use Patterns\Builder\Classes\Product;

/**
 * Какой-то строитель
 */
abstract class Builder
{
    
    /**
     * @var Product
     */
    protected $product;
    
    
    /**
     * Возвращает созданный продукт
     *
     * @return Product
     */
    final public function getProduct()
    {
        return $this->product;
    }
    
    /**
     * Создаёт продукт
     *
     * @return void
     */
    public function buildProduct()
    {
        $this->product = new Product();
    }
}