<?php

require_once 'Observer.php';
require_once 'NumberChannel.php';

final class BinaryObserver implements  Observer
{
    private $channel;

    public function __construct(NumberChannel $channel)
    {
        $this->channel = $channel;
    }

    public function update(): void
    {
        echo '<strong>Binary </strong>'.decbin($this->channel->getNumber()).'</br>';
    }
}