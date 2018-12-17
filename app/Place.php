<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use Searchable;

    protected $primaryKey = 'plid';

    protected $fillable = ['plname','plinfo','plimage','plcaption','plauthor','pladdress','plcredit'];

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
    protected $indexConfigurator = PlaceIndexConfigurator::class;

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
          'plname' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'plinfo' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'plauthor' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'pladdress' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],
          'plcredit' => [
              'type' => 'text',
                'analyzer' => 'standard'
          ],

        ]
    ];
}