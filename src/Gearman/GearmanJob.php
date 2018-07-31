<?php
namespace App\Gearman;

class GearmanJob extends \Net_Gearman_Job_Common {

    public function run($workload) {
        $result = strrev($workload);
        return $result;
    }
}