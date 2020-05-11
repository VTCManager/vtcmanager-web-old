<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogbookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $job["origin"] = "Test origigii";
        $job["destination"] = "Tst destiiii";
        $job["cargo"] = "Tast crög";
        $job["distance"] = 1;
        $job["started"] = true;

        auth()->user()->jobs()->create($job);
        $jobs = auth()->user()->jobs()->get();
        return view('interface.logbook', ['jobs' => $jobs]);
    }
}
