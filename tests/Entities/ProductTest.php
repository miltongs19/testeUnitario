<?php

namespace Milton\TesteUnitario\Tests\Entities;

use Milton\TesteUnitario\Entities\Product;
use Milton\TesteUnitario\Entities\IProduct;

class ProductTest extends \PHPUnit\Framework\TestCase
{
    public function testProductType()
    {
        $product = new Product();
        $this->assertInstanceOf(IProduct::class, $product);
    }

    public function testProductName()
    {
        $product = new Product();
        $product->setName("Produto 1");
        $this->assertEquals("Produto 1", $product->getName());
    }

    public function testProductDescription()
    {
        $product = new Product();
        $product->setDescription("Desc 1");
        $this->assertEquals("Desc 1", $product->getDescription());
    } 
    
    public function testProductPrice()
    {
        $product = new Product();
        $product->setPrice(23);
        $this->assertEquals(23, $product->getPrice());
    }
    

    /**
     * @expectedException InvalidArgumentException
     */
    public function testProductPriceANotNumericGiven()
    {
        $product = new Product();
        $product->setPrice("aaa");
        //$this->assertEquals("222", $product->getPrice());
    }       

}