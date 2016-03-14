<?php

use App\Product;

class CartTest extends TestCase
{
    private $cart;

    public function setUp() {
        parent::setUp();

        $this->cart = $this->app['App\Cart\Cart'];

        Product::create(['name' => 'product one']);
    }

    public function testInstanceOfServiceCart() {
        $this->assertInstanceOf('App\Cart\Cart', $this->cart);
    }

/*    public function testStorageEmpty() {
        $this->assertEquals([], $this->cart->getCart());
    }*/

    public function testCalculTotal() {

    }
}
