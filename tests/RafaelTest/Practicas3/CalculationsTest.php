<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Practica\Onboardinii\Rafael\Practicas3\Calculations;

class CalculationsTest extends TestCase{

    public function testAdd(){

        $add = new Calculations();
        $this->assertEquals(10, $add->add(5,5));

    }

    public function testSubt(){

        $subt = new Calculations();
        $this->assertEquals(5, $subt->subt(10,5));
    }

}
