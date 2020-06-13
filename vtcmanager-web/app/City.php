<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //for id
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function jobs_arriving()
    {
        return $this->hasMany('App\Job', 'destination_id');
    }
    public function jobs_departing()
    {
        return $this->hasMany('App\Job', 'origin_id');
    }
}
