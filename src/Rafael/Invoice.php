<?php

namespace Practica\Onboardinii\Rafael;


class Invoice {
    public $number;
    public $issueDate;
    public $items = [];

    public function __construct($number,$issueDate)
    {
        $this->number = $number;
        $this->issueDate = $issueDate;
    }

    public function addItem(Item $item){
        $this->items[]= $item ;
}

public function total(){
    $total = 0;
    foreach ($this->items as $item){
       $total += $item->total();
    }
    return $total;
}

}

