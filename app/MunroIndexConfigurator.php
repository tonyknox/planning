<?php

namespace App;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class MunroIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    
    /**
     * @var array
     */
    protected $settings = [
        //
    ];
}