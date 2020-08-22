<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use DB;

class MemberController extends Controller
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
        $memberdata = Member::all();
        //print_r($category);
        return view('Admin_view.member',compact('memberdata'));
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
        'name' => 'required|unique:members',
        'designation' => 'required',
        'phone' => 'required',
        'email' => 'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $data['designation']=$request->designation;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $image=$request->file('image');

        if ($image) {

            $image_name= date('dmy_Hsi');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='media/member/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $data['image']=$image_url;
            $brand=DB::table('members')
                      ->insert($data);
                $notification=array(
                 'messege'=>'Successfully Member Inserted',
                 'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }else{
          $brand=DB::table('members')
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
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
