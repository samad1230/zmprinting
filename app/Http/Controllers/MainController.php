<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index()
    {
    	$about = DB::table('aboutus')->get();
    	$slider = DB::table('sliders')
    		 ->orderBy('id', 'desc')
    		 ->limit(5)
    	->get();
    	$product = DB::table('products')
    	->orderBy('id', 'desc')
    	->get();
        return view('Home_page.welcome',compact('about','slider','product'));
    }


}
