<?php

namespace App\Http\Controllers;

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
        return view('interface.settings');
    }
}
