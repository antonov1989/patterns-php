<?php
/**
 * Пул объектов
 */
class ObjectFactory
{
    
    /**
     * @var Product[]
     */
    protected static $products = array();
    
    
    /**
     * Добавляет продукт в пул
     *
     * @param Product $product
     * @return void
     */
    public static function pushProduct(Product $product)
    {
        self::$products[$product->getId()] = $product;
    }
    
    /**
     * Возвращает продукт из пула
     *
     * @param integer|string $id - идентификатор продукта
     * @return Product $product
     */
    public static function getProduct($id)
    {
        return isset(self::$products[$id]) ? self::$products[$id] : null;
    }
    
    /**
     * Удаляет продукт из пула
     *
     * @param integer|string $id - идентификатор продукта
     * @return void
     */
    public static function removeProduct($id)
    {
        if (array_key_exists($id, self::$products)) {
            unset(self::$products[$id]);
        }
    }
}