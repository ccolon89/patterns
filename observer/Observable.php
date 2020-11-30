<?php

interface Observable
{
   public function attach(Observer $o) : void;
   public function detach(Observer $o) : void;
   public function notify() : void;
}