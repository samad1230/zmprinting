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
        ->where('status',1)
    	->get();
        $ongoing = DB::table('products')
        ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        ->select('products.*', 'categories.category_name')
        ->where('status',2)
        ->get();
        $client = DB::table('clients')->get();
        $member = DB::table('members')->get();
        $blog = DB::table('blogs')
             ->orderBy('id', 'desc')
             ->limit(2)
        ->get();
        $recentpost = DB::table('blogs')
             ->orderBy('id', 'desc')
             ->limit(10)
        ->get();
        $profile = DB::table('profiles')->get();
        $category = DB::table('categories')->get();
        $social = DB::table('socials')->get();
        return view('Home_page.welcome',compact('about','slider','product','ongoing','client','member','blog','profile','recentpost','category','social'));

    }

    public function contact()
    {
        $client = DB::table('clients')->get();
        $social = DB::table('socials')->get();
        $profile = DB::table('profiles')->get();
        $category = DB::table('categories')->get();
        $about = DB::table('aboutus')->get();
        $recentpost = DB::table('blogs')
             ->orderBy('id', 'desc')
             ->limit(10)
        ->get();
        $blog = DB::table('blogs')
             ->orderBy('id', 'desc')
             ->limit(2)
        ->get();
        return view('Home_page.contact',compact('client','profile','social','category','about','recentpost','blog'));
    }


    public function aboutus()
    {
        $client = DB::table('clients')->get();
        $social = DB::table('socials')->get();
        $profile = DB::table('profiles')->get();
        $category = DB::table('categories')->get();
        $about = DB::table('aboutus')->get();
        $recentpost = DB::table('blogs')
             ->orderBy('id', 'desc')
             ->limit(10)
        ->get();
        $blog = DB::table('blogs')
             ->orderBy('id', 'desc')
             ->limit(2)
        ->get();
        return view('Home_page.aboutus',compact('client','profile','social','category','about','recentpost','blog'));
    }

    public function client()
    {
        $client = DB::table('clients')->get();
        $social = DB::table('socials')->get();
        $profile = DB::table('profiles')->get();
        $category = DB::table('categories')->get();
        $about = DB::table('aboutus')->get();
        $recentpost = DB::table('blogs')
             ->orderBy('id', 'desc')
             ->limit(10)
        ->get();
        $blog = DB::table('blogs')
             ->orderBy('id', 'desc')
             ->limit(2)
        ->get();
        return view('Home_page.client',compact('client','profile','social','category','about','recentpost','blog'));
    }


    public function gallery()
    {
        $client = DB::table('clients')->get();
        $social = DB::table('socials')->get();
        $profile = DB::table('profiles')->get();
        $category = DB::table('categories')->get();
        $about = DB::table('aboutus')->get();
        $gallery = DB::table('galleries')->get();
        $recentpost = DB::table('blogs')
             ->orderBy('id', 'desc')
             ->limit(10)
        ->get();
        $blog = DB::table('blogs')
             ->orderBy('id', 'desc')
             ->limit(2)
        ->get();
        return view('Home_page.gallery',compact('client','profile','social','category','about','recentpost','blog','gallery'));
    }

}

            