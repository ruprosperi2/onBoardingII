<?php

namespace Practica\Onboardinii\Rafael;

class Item
{
    public $description;
    public $price;
    public $quantity;

    public function __construct(string $description,float $price,int $quantity) 
    {
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function description(){
        return $this->description;
    }

    public function price(){
        return $this->price;
    }

    public function quantity(){
        return $this->quantity;
    }

    public function total(){
        return $this->price * $this->quantity;
    }
}

