<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TruckBrand extends Model
{
    //for id
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'name', 'id',
    ];

    public function trucks()
    {
        return $this->hasMany(Truck::class);
    }
}
