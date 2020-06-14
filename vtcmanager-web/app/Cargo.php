<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //for id
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'name', 'id',
    ];

    public function jobs()
    {
        return $this->hasMany('App\Job', 'cargo_id');
    }
}
