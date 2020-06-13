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
        'origin_id', 'destination_id', 'cargo','cargo_weight', 'distance','company', 'status', 'ets_income', 'origin_company_id', 'destination_company_id', 'delivery_deadline',
        'freight_market', 'fuel_at_beginning', 'truck_damage_at_beginning', 'cargo_id',
    ];

    protected $attributes = [
        'delayed' => false,
    ];

    public function truck()
    {
        return $this->hasOne(Truck::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function origin()
    {
        return $this->belongsTo('App\Post');
    }
    public function destination()
    {
        return $this->belongsTo('App\Post');
    }
}
