<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Practica\Onboardinii\Rafael\Invoice;
use Practica\Onboardinii\Rafael\Item;

class InvoiceTest extends TestCase{

    public function testAddItem(){

        $in = new Invoice(1, "10/10/2024");

        $item = new Item ("Computer", 50.00, 2);

        $in->addItem($item);

        $this->assertCount(1, $in->items());
    }

    public function testInvoiceTotal(){
        $in = new Invoice(1, "10/10/2024");

        $item = new Item ("Computer", 50, 2);
        $ite = new Item ("Phone", 50, 2);

        $in->addItem($item);
        $in->addItem($ite);

        $this->assertEquals(200, $in->total());

    }
}