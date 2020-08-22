<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use DB;
class ClientController extends Controller
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
        $clientdata = Client::all();
        //print_r($category);
        return view('Admin_view.client',compact('clientdata'));
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
        'client_name' => 'required|unique:clients',
        'client_address' => 'required',
        'client_url' => 'required',
        'client_logo' => 'required',
        ]);


        $data=array();
        $data['client_name']=$request->client_name;
        $data['client_address']=$request->client_address;
        $data['client_url']=$request->client_url;
        $image=$request->file('client_logo');

        if ($image) {

            $image_name= date('dmy_Hsi');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='media/client/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $data['client_logo']=$image_url;
            $brand=DB::table('clients')
                      ->insert($data);
                $notification=array(
                 'messege'=>'Successfully Client Inserted',
                 'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }else{
          $brand=DB::table('clients')
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
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = DB::table('clients')->where('id', $id)->first();
        return response()->json([$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $oldlogo=$request->oldimage;
        $clientid=$request->clientid;

        $data=array();
        $data['client_name']=$request->client_name;
        $data['client_address']=$request->client_address;
        $data['client_url']=$request->client_url;
        $image=$request->file('client_logo');

        if ($image) {

        unlink($oldlogo);
        $image_name= date('dmy_Hsi');
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='media/client/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['client_logo']=$image_url;
        $brand=DB::table('clients')->where('id',$clientid)->update($data);
            $notification=array(
             'messege'=>'Successfully Client Updated ',
             'alert-type'=>'success'
            );

           return Redirect()->back()->with($notification);
        }else{
          $brand=DB::table('clients')->where('id',$clientid)->update($data);
             $notification=array(
                 'messege'=>'Update without image!',
                 'alert-type'=>'success'
                  );
           return Redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $deletecat = $client;
        $deletecat->delete();
         $notification=array(
             'messege'=>'Successfully Client Deleted ',
             'alert-type'=>'success'
            );
         return Redirect()->back()->with($notification);
    }
}
