<?php

namespace App\Tests;

use App\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testProductCreationWithName(): void
    {
        $product = new Product("test");
        $this->assertInstanceOf(\PDO::class, $product);
    }
}