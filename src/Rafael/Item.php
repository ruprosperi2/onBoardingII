<?php

namespace Practica\Onboardinii\Rafael;

final class Item
{
    private $description;
    private $price;
    private $quantity;

    public function __construct(string $description,float $price,int $quantity) 
    {
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function description(): string{
        return $this->description;
    }

    public function price(): float{
        return $this->price;
    }

    public function quantity(): int{
        return $this->quantity;
    }

    public function total(): float{
        return $this->price * $this->quantity;
    }
}

