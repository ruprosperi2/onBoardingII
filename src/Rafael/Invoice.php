<?php

namespace Practica\Onboardinii\Rafael;


final class Invoice {
    private $number;
    private $issueDate;
    private $items = [];

    public function __construct($number,$issueDate)
    {
        $this->number = $number;
        $this->issueDate = $issueDate;
    }

    public function addItem(Item $item): void{
        $this->items[]= $item ;
}

public function total(): float{
    $total = 0;
    foreach ($this->items as $item){
       $total += $item->total();
    }
    return $total;
}

public function items(): array{
    return $this->items;
}

}

