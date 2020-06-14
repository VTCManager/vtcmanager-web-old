<?php

namespace App\Http\Controllers;

use App\ClientKey;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class APIJobController extends Controller
{
    public function started(Request $request)
    {
        //ORIGIN;
        $found_city_origin = \App\City::find($request->origin_id);
        if(!$found_city_origin){
            $new_city_origin["name"] = $request->origin;
            $new_city_origin["id"] = $request->origin_id;
            \App\City::create($new_city_origin);
        }
        $job["origin_id"] = $request->origin_id;

        //Origin Company
        $found_company_origin = \App\InGameCompany::find($request->origin_company_id);
        if(!$found_company_origin){
            $new_company_origin["name"] = $request->origin_company;
            $new_company_origin["id"] = $request->origin_company_id;
            \App\InGameCompany::create($new_company_origin);
        }
        $job["origin_company_id"] = $request->origin_company_id;

        //DESTINATION
        $found_city_destination = \App\City::find($request->destination_id);
        if(!$found_city_destination){
            $new_city_destination["name"] = $request->destination;
            $new_city_destination["id"] = $request->destination_id;
            \App\City::create($new_city_destination);
        }
        $job["destination_id"] = $request->destination_id;

        //Destination Company
        $found_company_destination = \App\InGameCompany::find($request->destination_company_id);
        if(!$found_company_destination){
            $new_company_destination["name"] = $request->destination_company;
            $new_company_destination["id"] = $request->destination_company_id;
            \App\InGameCompany::create($new_company_destination);
        }
        $job["destination_company_id"] = $request->destination_company_id;

        //CARGO
        $found_cargo = \App\Cargo::find($request->cargo_id);
        if(!$found_cargo){
            $new_cargo["name"] = $request->cargo;
            $new_cargo["id"] = $request->cargo_id;
            \App\Cargo::create($new_cargo);
        }
        $job["cargo_id"] = $request->cargo_id;

        $job["cargo_weight"] = (int) $request->cargo_weight;

        //TRUCK
        $found_truck = \App\Truck::find($request->truck_id);
        if(!$found_truck){
            $found_brand = \App\TruckBrand::find($request->truck_brand_id);
            if(!$found_brand){
                $new_brand["name"] = $request->truck_brand;
                $new_brand["id"] = $request->truck_brand_id;
                \App\TruckBrand::create($new_brand);
            }
            $new_truck["model"] = $request->truck;
            $new_truck["id"] = $request->truck_id;
            $new_truck["brand_id"] = $request->truck_brand_id;
            \App\Truck::create($new_truck);
        }
        $job["truck_id"] = $request->truck_id;

        $job["distance"] = $request->planned_distance;
        $job["ets_income"] = $request->ets_income;
        $job["started"] = true;
        $job["delivery_deadline"] = Carbon::parse($request->delivery_deadline);
        $job["freight_market"] = $request->freight_market;
        $job["fuel_at_beginning"] = $request->fuel_at_beginning;
        $job["truck_damage_at_beginning"] = $request->truck_damage_at_beginning;
        $request->user()->jobs()->create($job);
        return [
            'success' => true,
        ];
    }

    public function delivered(Request $request)
    {
        $job = $request->user()->jobs()->latest()->get()->first();
        if (!$job) {
            return [
                'error' => true,
                'details' => 'No tours found',
            ];
        }
        $job->finished = true;
        $request->user()->jobs()->save($job);
        return [
            'error' => false,
        ];
    }

    public function show(Request $request, $id)
    {
        return auth()->user()->jobs()->findorfail($id);
    }
}
