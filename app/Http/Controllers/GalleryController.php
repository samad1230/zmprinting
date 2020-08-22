<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use DB;
class GalleryController extends Controller
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
        $gallerydata = Gallery::all();
        return view('Admin_view.gallery',compact('gallerydata'));
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
        'name' => 'required',
        ]);

        $data=array();
        $data['name']=$request->name;
        $image=$request->file('image');

        if ($image) {

            $image_name= date('dmy_Hsi');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='media/gallery/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $brand=DB::table('galleries')
                      ->insert($data);
                $notification=array(
                 'messege'=>'Successfully Gallery Inserted',
                 'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }else{
          $brand=DB::table('galleries')
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
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
       return response()->json([$gallery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        

        $oldlogo=$request->oldimage;
        $oldid=$request->oldid;


        $data=array();
        $data['name']=$request->name;
        $image=$request->file('image');

        if ($image) {

        unlink($oldlogo);
        $image_name= date('dmy_Hsi');
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='media/gallery/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['image']=$image_url;
        $brand=DB::table('galleries')->where('id',$oldid)->update($data);
            $notification=array(
             'messege'=>'Successfully Gallery Updated ',
             'alert-type'=>'success'
            );

           return Redirect()->back()->with($notification);
        }else{
          $brand=DB::table('galleries')->where('id',$oldid)->update($data);
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
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
