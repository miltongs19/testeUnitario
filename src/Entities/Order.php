<?php

namespace Milton\TesteUnitario\Entities;

class Order
{
    private $products;

    public function __construct()
    {
        $this->products = new \ArrayObject();
    }

    public function addProduct(IProduct $product)
    {
        $this->products->append($product);
    }

    public function getProducts()
    {
        return $this->products;
    }
}