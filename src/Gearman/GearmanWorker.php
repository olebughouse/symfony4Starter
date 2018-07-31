<?php
namespace App\Gearman;

use MHlavac\Gearman\Worker;

class GearmanWorker {

    public static function addWorker() {

        $worker = new Worker();
        $worker->addServer("localhost", 4730);
        $worker->addFunction('replace',
            function($payload)
            {
                echo('function call' . "\n");
                echo "Received job: " . $payload . "\n";

                return str_replace('Java', 'Php', $payload);
                //return 'Hello world!';
            }
        );

        while($worker->work());
    }
}