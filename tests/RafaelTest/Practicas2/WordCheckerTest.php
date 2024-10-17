<?php


require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Practica\Onboardinii\Rafael\Practicas2\WordChecker;


final class WordCheckerTest extends TestCase{
    
    public function test_shouldIsEmpty(){
        $frase= "";
        $test = new WordChecker();

        $this->assertEquals(true, $test->validate($frase));

    }

}