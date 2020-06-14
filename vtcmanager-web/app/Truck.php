<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trucks_table';

    public $timestamps = false;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    protected $fillable = [
        'id', 'model', 'brand_id',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function truckbrand(){
        return $this->belongsTo(Brand::class);
    }
}
