<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Greenery extends Model
{
    use Searchable;

    protected $primaryKey = 'grid';

    protected $fillable = ['grname', 'grinfo','chap_name','grdescription','chap_chapid','book_bkid'];

    public function chapters()
    {
        return $this->belongsTo('App\Chapter', 'chapter_chapid');
    }

    /**
     * @var string
     */
    protected $indexConfigurator = GreeneryIndexConfigurator::class;

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
              "grname" => [
                  "type" => "text",
                  "analyzer" => "standard"
              ],
              "grinfo" => [
                  "type" => "text",
                    "analyzer" => "standard"
              ],
              
              "grdescription" => [
                "type" => "text",
                  "analyzer" => "standard"
            ],
  
        ]
    ];
}