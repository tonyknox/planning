<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use Searchable;

    protected $primaryKey = 'ppid';

    protected $fillable = ['first', 'last', 'salutation', 'honorifics', 'honorifics','ppcredit','biography','ppimage','ppcaption','ppcomments','pptag','ppsidebar','directory_dirid','person_ppid','ppsidebar','type'];

   public function articles()
    {
      return $this->belongsToMany('App\Article');
    }

    public function mimages()
    {
      return $this->belongsToMany(Mimage::class);
    }

    /**
     * @var string
     */
    protected $indexConfigurator = PersonIndexConfigurator::class;

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
          'first' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'last' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'honorifics' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'honorifics' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'ppcredit' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'biography' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'ppimage' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'ppcaption' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'pptag' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'ppsidebar' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'type' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ]

        ]
    ];
}