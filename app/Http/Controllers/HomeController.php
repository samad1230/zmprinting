<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
class HomeController extends Controller
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
    public function index()
    {
        $mainprofile = Profile::all();
        //print_r($category);
        return view('home', compact('mainprofile'));
        return view('layouts.app', compact('mainprofile'));
    }

    
}
