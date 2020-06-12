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
        return view('interface.settings');
    }
}
