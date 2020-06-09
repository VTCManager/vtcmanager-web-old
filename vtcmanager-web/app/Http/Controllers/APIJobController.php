<?php

namespace App\Http\Controllers;

use App\ClientKey;
use App\Job;
use Illuminate\Http\Request;

class APIJobController extends Controller
{
    public function create(Request $request, $key)
    {
        $key = ClientKey::find($key);
        if (isset($key->key)) {
            if($request->client_ident == $key->client_ident && $request->key == $key->key){
                $job["origin"] = $request->origin;
                $job["destination"] = $request->destination;
                $job["cargo"] = $request->cargo;
                $job["cargo_weight"] = (int)$request->cargo_weight;
                $job["distance"] = $request->planned_distance;
                $job["started"] = true;
                $key->user()->get()->first()->jobs()->create($job);
                return [
                    'success' => true,
                ];
            }else{
                return [
                    'success' => false,
                    'error_code' => 'unauthorized',
                ];
            }
        } else {
            return [
                'success' => false,
                'error_code' => 'key_not_found',
            ];
        }
    }
}
