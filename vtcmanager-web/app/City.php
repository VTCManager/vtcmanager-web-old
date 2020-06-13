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
}
