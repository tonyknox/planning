<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    use Searchable;

     protected $primaryKey = 'dirid';
    
    protected $fillable = ['dname','infoCol1','infoCol2','infoCol3','headlineCol1','headlineCol2','headlineCol3','dirImage','dirCaption','dirDescription'];
    
    /**
     * @var string
     */
    protected $indexConfigurator = DirectoryIndexConfigurator::class;

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
              "infoCol1" => [
                  "type" => "text",
                  "analyzer" => "standard"
              ],
              "infoCol2" => [
                  "type" => "text",
                    "analyzer" => "standard"
              ],
              "infoCol3" => [
                "type" => "text",
                  "analyzer" => "standard"
            ],
            "dirDescription" => [
                "type" => "text",
                  "analyzer" => "standard"
            ],
            "dirCaption" => [
                "type" => "text",
                  "analyzer" => "standard"
            ],
  
        ]
    ];
}