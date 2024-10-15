<?php

/**
 * Object pool - набор инициализированных и готовых киспользованию объектов.
 * Когда системе требуется объект, он не создаётся, а берётся из пула.
 * Когда объектбольше не нужен, он не уничтожается, а возвращается в пул.
 *
 * Применим в играх
 * ObjectFactory - управляет нашим пулом обьектов по ключям
 * Product - различные вариации обьектов
 */

ObjectFactory::pushProduct(new Product('first'));
ObjectFactory::pushProduct(new Product('second'));

print_r(ObjectFactory::getProduct('first')->getId());
// first
print_r(ObjectFactory::getProduct('second')->getId());
// second