<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Searchable;

     protected $primaryKey = 'artid';
    protected $fillable = ['artsort','artdate','article','abstract','headline','artcredit','directory_dirid','artauthor','person_ppid','artimage','artcaption','artsidebar','arttag','tagtype','artthumb'];

  
    public function places()
    {
        return $this->hasMany(Place::class);
    }
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
    /**
     * @var string
     */
    protected $indexConfigurator = ArticleIndexConfigurator::class;

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
          'artid' => [
              'type' => 'long',
          ],
          'artdate' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'article' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'headline' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'artcredit' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'atauthor' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'artimage' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'artcaption' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'arttag' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          'arttype' => [
              'type' => 'text',
              'analyzer' => 'standard'
          ],
          
        ]
    ];
}