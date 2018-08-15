<?php

namespace Milton\TesteUnitario\Tests\Entities;

use Milton\TesteUnitario\Entities\Product;
use Milton\TesteUnitario\Entities\Order;

class OrderTest extends \PHPUnit\Framework\TestCase
{
    public function testGetProductList()
    {
        $product = new Product();
        $product->setName('Produto 1');
        $product->setDescription('Desc 1');
        $product->setPrice(50);

        $product2 = new Product();
        $product2->setName('Produto 2');
        $product2->setDescription('Desc 2');
        $product2->setPrice(10);

        $order = new Order();
        $order->addProduct($product);
        $order->addProduct($product2);

        $products = new \ArrayObject([$product,$product2]);

        $this->assertEquals($products,$order->getProducts());
    }

    public function testGetTotal()
    {
        $product = new Product();
        $product->setName('Produto 1');
        $product->setDescription('Desc 1');
        $product->setPrice(50);

        $product2 = new Product();
        $product2->setName('Produto 2');
        $product2->setDescription('Desc 2');
        $product2->setPrice(10);

        $order = new Order();
        $order->addProduct($product);
        $order->addProduct($product2);
        
        $total = 60;

        $this->assertEquals($total, $order->getTotal());
    }

}