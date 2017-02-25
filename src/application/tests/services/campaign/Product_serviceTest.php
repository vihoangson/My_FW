<?php

use campaign\Services\Product_service;


class Product_serviceTest extends PHPUnit_Framework_TestCase {
    public function setUp() {

    }

    public function testFirst() {
        $op = new Product_service();
        $op->sub();

        $a = [ 1, 2, 3, 4 ];
        $this->assertNotNull( $a );
    }
}
