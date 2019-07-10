<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Munrofootnote extends Model
{
    use Searchable;

    protected $primaryKey = 'mfnid';

    protected $fillable = ['mfnnumber', 'mfninfo','mfnchap','mfnpage'];
    
    /**
     * @var string
     */
    protected $indexConfigurator = MunrofootnoteIndexConfigurator::class;

    /**
     * @var array
     */
    protected $searchRules = [
        //
    ];

    protected $mapping = [
        "properties" => [
            "mfninfo" => [
                "type" => "text",
                  "analyzer" => "standard"
            ]
        ]
    ];
}