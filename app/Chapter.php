<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use Searchable;


protected $primaryKey = 'chapid';

    protected $fillable = ['chapname', 'chapinfo', 'book_bkid', 'chapsort'];

    public function books()
    {
        return $this->belongsTo(Book::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function mccplans()
    {
        return $this->hasMany(Mccplan::class);
    }

    public function greeneries()
    {
        return $this->hasMany(Greenery::class);
    }

    public function munros()
    {
        return $this->hasMany(Munro::class);
    }

     public function directories()
    {
        return $this->belongsTo(Directory::class);
    }
    /**
     * @var string
     */
    protected $indexConfigurator = ChapterIndexConfigurator::class;

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
          'chapinfo' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'chaptername' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'chapid' => [
              'type' => 'long'
          ]
        ]    
    ];
}