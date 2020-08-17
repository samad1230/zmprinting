<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index()
    {
    	$about = DB::table('aboutus')->get();
        return view('Home_page.welcome',compact('about'));
    }
}
