<?php

require_once 'Product.php';

final class CompositeProduct extends Product
{

    private array $combo;

    public function __construct(string $sku, string $name)
    {
        parent::__construct($sku, $name);
    }

    public function appendChild(Product $product) {
       $this->combo[] = $product;
    }

    public function childs() {
        return $this->childs();
    }

    public function cost()
    {
        $cost =  0;
        foreach ($this->combo as $item){
           $cost +=  $item->cost();
        }
        return $cost;
    }
}
