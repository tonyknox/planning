<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Mccplan extends Model
{
    use Searchable;

    protected $primaryKey = 'mccid';

    protected $fillable = ['mccname', 'mccinfo','chapter','mccdescription', 'chapter_chapid','book_bkid'];

    public function chapters()
    {
        return $this->belongsTo('App\Chapter', 'chapter_chapid');
    }
    
    /**
     * @var string
     */
    protected $indexConfigurator = MccplanIndexConfigurator::class;

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
            "mccname" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
            "mccinfo" => [
                "type" => "text",
                  "analyzer" => "standard"
            ],
            "mccdescription" => [
              "type" => "text",
                "analyzer" => "standard"
          ]

        ]
    ];
}