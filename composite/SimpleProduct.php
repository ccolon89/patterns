<?php

require_once 'Product.php';

final class SimpleProduct extends Product
{

    private float $cost;

    public function __construct(string $sku, string $name,float $cost)
    {
        parent::__construct($sku,$name);
        $this->cost = $cost;
    }

    public function cost()
    {
       return $this->cost;
    }
}