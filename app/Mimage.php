<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Mimage extends Model
{
    use Searchable;

    protected $primaryKey = 'imgid';
    protected $fillable = ['imgname','imgpath','imgext','alt','caption','credit','person_ppid','place_plid','article_artid'];

    public function articles()
    {
      return $this->belongsTo(Article::class, 'article_artid');
    }

    public function people()
    {
      return $this->belongsToMany(People::class, 'person_ppid');
    }

    public function places()
    {
      return $this->belongsToMany(Places::class, 'place_plid');
    }

    public function imgwidth()
    {
      list($w,$h) = getimagesize("imgpath/imgname.imgextension");
        if($h > $w){
          $width = $w / $h * 100;
          $width = "$width%";
        };     
      return $width;
    }

    /**
     * @var string
     */
    protected $indexConfigurator = MimageIndexConfigurator::class;

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
        'properties' => [
            'imgid' => [
                'type' => 'integer',
            ],
            'imgname' => [
                'type' => 'text',
                'analyzer' => 'english'
            ],
            'imgpath' => [
                'type' => 'text',
                'analyzer' => 'english'
            ],
            'alt' => [
                'type' => 'text',
                'analyzer' => 'english'
            ],
            'caption' => [
                'type' => 'text',
                'analyzer' => 'english'
            ],
            'credit' => [
                'type' => 'text',
                'analyzer' => 'english'
            ]
        ]
    ];
}