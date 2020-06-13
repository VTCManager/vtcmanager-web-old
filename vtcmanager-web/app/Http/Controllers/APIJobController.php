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
        $job["origin_id"] = $request->origin_id;
        $job["origin_company_id"] = $request->origin_company_id;
        //DESTINATION
        $job["destination_id"] = $request->destination_id;
        $job["destination_company_id"] = $request->destination_company_id;

        $job["cargo"] = $request->cargo;
        $job["cargo_weight"] = (int) $request->cargo_weight;
        $job["distance"] = $request->planned_distance;
        $job["ets_income"] = $request->ets_income;
        $job["started"] = true;
        $job["delivery_deadline"] = Carbon::parse($request->delivery_deadline);
        $job["freight_market"] = $request->freight_market;
        $job["fuel_at_beginning"] = $request->fuel_at_beginning;
        $job["truck_damage_at_beginning"] = $request->truck_damage_at_beginning;
        $job["cargo_id"] = $request->cargo_id;
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
