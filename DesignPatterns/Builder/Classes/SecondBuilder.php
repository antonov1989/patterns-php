<?php

namespace Patterns\Builder\Classes;

use Patterns\Builder\Classes\Builder\Builder;

/**
 * Второй строитель
 */
class SecondBuilder extends Builder
{
    
    /**
     * Создаёт продукт
     *
     * @return void
     */
    public function buildProduct()
    {
        parent::buildProduct();
        $this->product->setName('The product of second builder');
    }
}