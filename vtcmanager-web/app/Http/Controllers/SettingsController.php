<?php

namespace App\Http\Controllers;

use App\ClientKey;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        /*$job["origin"] = "Test origigii";
        $job["destination"] = "Tst destiiii";
        $job["cargo"] = "Tast crög";
        $job["distance"] = 1;
        $job["started"] = true;

        auth()->user()->jobs()->create($job);*/
        $client_keys = auth()->user()->clientkeys()->latest()->get();
        return view('interface.settings', ['client_keys' => $client_keys]);
    }

    public function create_client_key(Request $request){
        $request->validate([
            'description' => 'max:255',
        ]);
        $key_data["description"] = $request->input("description");
        do
    {
        $token = auth()->user()->id.rand(10000,99999).time();
        $user_code = ClientKey::where('key', $token)->get();
    }
    while(!$user_code->isEmpty());
        $key_data["key"] = $token;
        auth()->user()->clientkeys()->create($key_data);
    }
}
