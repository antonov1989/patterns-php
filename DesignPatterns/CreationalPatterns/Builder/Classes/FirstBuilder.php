<?php

namespace Patterns\Builder\Classes;

use Patterns\Builder\Classes\Builder\Builder;

/**
 * Первый строитель
 */
class FirstBuilder extends Builder
{
    
    /**
     * Создаёт продукт
     *
     * @return void
     */
    public function buildProduct()
    {
        parent::buildProduct();
        $this->product->setName('The product of the first builder');
    }
}