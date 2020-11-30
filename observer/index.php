<?php

require_once 'NumberChannel.php';
require_once 'HexaObserver.php';
require_once 'OctalObserver.php';
require_once 'BinaryObserver.php';

final class ObserverProgram {

    public static function main() {

        //1. se crea el canal observable (observable)
        $channel = new NumberChannel();

        //2. se agregan los suscriptores al canal observable
        $hexa = new HexaObserver($channel);
        $channel->attach($hexa);
        $octa = new OctalObserver($channel);
        $channel->attach($octa);
        $binary = new BinaryObserver($channel);
        $channel->attach($binary);

        //3. se modifica el estado del canel observable el cual notificara a los suscriptores (observer)
        $channel->setNumber(15);
        $channel->setNumber(10);

    }
}

echo '<h1>Patterns Observer</h1>';
ObserverProgram::main();

