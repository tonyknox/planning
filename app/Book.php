<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use Searchable;

    protected $primaryKey = 'bkid';

    protected $fillable = ['bkname', 'bkdescription', 'bkinfo', 'bkauthor','bktype','bkthumb','publisher','isbn','datepublished'];

    public function chapters()
    {
      return $this->hasMany(Chapter::class);
    }

    /**
     * @var string
     */
    protected $indexConfigurator = BookIndexConfigurator::class;

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
            "bkname" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
            "bkdescription" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
            "bkinfo" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
            "bkauthor" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
            "bktype" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
            "bkthumb" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
            "publisher" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
            "isbn" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
            "datepublished" => [
                "type" => "text",
                "analyzer" => "standard"
            ],
        ]
    ];
}