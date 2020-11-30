<?php

abstract class Product
{
    private string $sku;
    private string $name;

    public function __construct(string $sku, string $name)
    {
        $this->sku = $sku;
        $this->name = $name;
    }

    public abstract function cost();

}