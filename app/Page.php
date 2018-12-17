<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Searchable;

    protected $primaryKey = 'pid';

    protected $fillable = ['pname', 'pinfo', 'chapter_chapid','pchapter_name','pdescription','book_bkid'];


    public function chapters()
    {
        return $this->belongsTo('App\Chapter', 'chapter_chapid');
    }
    public function books()
    {
        return $this->belongsTo('App\Book', 'book_bkid');
    }
    public function articles()
    {
        return $this->belongsTo('App\Article');
    }

    /**
     * @var string
     */
    protected $indexConfigurator = PageIndexConfigurator::class;

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
              "pname" => [
                  "type" => "text",
                  "analyzer" => "standard"
              ],
              "pinfo" => [
                  "type" => "text",
                    "analyzer" => "standard"
              ],
              "pdescription" => [
                "type" => "text",
                  "analyzer" => "standard"
            ],
  
        ]
    ];
}