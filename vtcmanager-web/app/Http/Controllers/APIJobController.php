<?php

namespace App\Http\Controllers;

use App\ClientKey;
use App\Job;
use Illuminate\Http\Request;

class APIJobController extends Controller
{
    public function started(Request $request)
    {
                $job["origin"] = $request->origin;
                $job["destination"] = $request->destination;
                $job["cargo"] = $request->cargo;
                $job["cargo_weight"] = (int)$request->cargo_weight;
                $job["distance"] = $request->planned_distance;
                $job["ets_income"] = $request->ets_income;
                $job["started"] = true;
                $request->user()->jobs()->create($job);
                return [
                    'success' => true,
                ];
    }
    public function delivered(Request $request){
        $job = $request->user()->jobs()->latest()->get()->first();
        if(!$job){
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
}
