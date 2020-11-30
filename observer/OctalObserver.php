<?php

require_once 'Observer.php';
require_once 'NumberChannel.php';

class OctalObserver implements  Observer
{
    private $channel;

    public function __construct(NumberChannel $channel)
    {
        $this->channel = $channel;
    }

    public function update(): void
    {
       echo '<strong>Octal :</strong>'.decoct($this->channel->getNumber()).'</br>';
    }
}