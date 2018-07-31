<?php

namespace App\Gearman;

use MHlavac\Gearman\Client;

class GearmanClient {

    public static function connectClient() {
        $client = new Client();
        $client->addServer("localhost", 4730);

        return $client->doNormal('replace', 'Java is best programming language!');
        //$client->doBackground('replace', 'PHP rules... PHP rules...');
    }

}