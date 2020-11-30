<?php

require_once 'Observer.php';
require_once 'NumberChannel.php';

final class HexaObserver implements Observer
{
    private $channel;

    public function __construct(NumberChannel $channel)
    {
        $this->channel = $channel;
    }

    public function update(): void
    {
        echo '<strong>Hexa </strong>'.dechex($this->channel->getNumber()).'</br>';
    }

}