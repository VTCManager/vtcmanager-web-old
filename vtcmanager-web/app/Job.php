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
        'freight_market', 'fuel_at_beginning', 'truck_damage_at_beginning', 'cargo_id', 'delivered_time', 'cargo_damage', 'fuel_at_end', 'truck_damage_at_end', 'truck_id',
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function origin()
    {
        return $this->belongsTo(City::class);
    }
    public function origin_company()
    {
        return $this->belongsTo(InGameCompany::class);
    }
    public function destination()
    {
        return $this->belongsTo(City::class);
    }
    public function destination_company()
    {
        return $this->belongsTo(InGameCompany::class);
    }
    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }
}
