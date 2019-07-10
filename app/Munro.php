<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Munro extends Model
{
    
    use Searchable;

    /**
     * @var string
     */
    protected $primaryKey = 'amid';

    protected $fillable = ['amname', 'aminfo','amchapter','amdescription', 'aminfo', 'chapter_chapid','book_bkid'];

    public function chapters()
    {
        return $this->belongsTo('App\Chapter', 'chapter_chapid');
    }

    /**
     * @var string
     */
    protected $indexConfigurator = MunroIndexConfigurator::class;

    /**
     * @var array
     */
    protected $searchRules = [
        //
    ];

    /**
     * @var array
     */
    protected $mapping = [
        "properties" => [
            "amname" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
            "aminfo" => [
                "type" => "text",
                  "analyzer" => "standard"
            ],
            "amdescription" => [
              "type" => "text",
                "analyzer" => "standard"
            ]
        ]
    ];
}/**
    