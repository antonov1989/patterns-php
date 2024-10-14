<?php

ObjectFactory::pushProduct(new Product('first'));
ObjectFactory::pushProduct(new Product('second'));

print_r(ObjectFactory::getProduct('first')->getId());
// first
print_r(ObjectFactory::getProduct('second')->getId());
// second