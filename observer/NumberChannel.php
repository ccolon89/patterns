<?php

require_once 'Observable.php';

class NumberChannel implements Observable
{
    private  $number;
    private $subcribers;

    public function __construct()
    {
        $this->number = 0;
        $this->subcribers = [];
    }

    public function getNumber() : int {
        return $this->number;
    }

    public  function setNumber(int $number) : void {
       $this->number = $number;
       $this->notify();
    }

    public function attach(Observer $o): void
    {
        $this->subcribers[] = $o;
    }

    public function detach(Observer $o): void
    {
       //este metodo se encarga de eliminar un suscriptor
    }

    public function notify(): void
    {
        foreach ($this->subcribers as $subcriber) {
            $subcriber->update();
        }
    }
}