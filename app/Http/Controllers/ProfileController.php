<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use DB;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiledata = Profile::all();
        //print_r($category);
        return view('Admin_view.profile',compact('profiledata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'company_name' => 'required|unique:profiles',
        'address' => 'required',
        'contact' => 'required',
        ]);


        $data=array();
        $data['company_name']=$request->company_name;
        $data['address']=$request->address;
        $data['contact']=$request->contact;
        $data['email_one']=$request->email_one;
        $data['email_two']=$request->email_two;
        $data['email_three']=$request->email_three;
        $image=$request->file('logo');

        if ($image) {
            $image_name= date('dmy_Hsi');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='media/company/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $data['logo']=$image_url;
            $brand=DB::table('profiles')
                      ->insert($data);
                $notification=array(
                 'messege'=>'Successfully Profile Inserted',
                 'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }else{
            $brand=DB::table('profiles')
                      ->insert($data);
             $notification=array(
             'messege'=>'Done!',
             'alert-type'=>'success'
              );
            return Redirect()->back()->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
