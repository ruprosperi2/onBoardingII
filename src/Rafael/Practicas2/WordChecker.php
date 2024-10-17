<?php

namespace Practica\Onboardinii\Rafael\Practicas2;

use function PHPUnit\Framework\isEmpty;

final class WordChecker{

    public function validate(string $frase): bool{
        if(!empty($frase)){
            return false;
        }
        return true;
    }
}