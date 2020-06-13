<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jobs_table';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'origin', 'destination', 'cargo','cargo_weight', 'distance','company', 'status', 'ets_income',
    ];


    public function truck()
    {
        return $this->hasOne(Truck::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
