<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    public function aboutusdata()
    {
    	$about = DB::table('aboutus')->get();
        return view('Admin_view.aboutus',compact('about'));
    }


    public function create_about(Request $request)
    {
    	$validatedData = $request->validate([
        'aboutus' => 'required|unique:aboutus',
        ]);

        $data=array();
        $data['aboutus']=$request->aboutus; 
        $image=$request->file('images');

        if ($image) {

                $image_name= date('dmy_Hsi');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/management/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['images']=$image_url;
                $brand=DB::table('aboutus')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully About Inserted ',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);                      
            }else{
              $brand=DB::table('aboutus')
                          ->insert($data);
                 $notification=array(
                     'messege'=>'Done!',
                     'alert-type'=>'success'
                      );
                return Redirect()->back()->with($notification); 
            }
    }


    public function EditAbout($id)
    {
    	$data = DB::table('aboutus')->where('id', $id)->first();	
    	return response()->json([$data]);	
    }


    public function UpdateAbout(Request $request)
    {
    	$oldlogo=$request->oldimage;
      $aboutid=$request->id;
        $data=array();
        $data['aboutus']=$request->aboutus; 
        $image=$request->file('images');

            if ($image) {
                unlink($oldlogo);
                $image_name= date('dmy_Hsi');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/management/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['images']=$image_url;
                $brand=DB::table('aboutus')->where('id',$aboutid)->update($data);
                    $notification=array(
                     'messege'=>'Successfully About Updated ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('aboutus')->with($notification);                      
            }else{
              $brand=DB::table('aboutus')->where('id',$aboutid)->update($data);
                 $notification=array(
                     'messege'=>'Update without image!',
                     'alert-type'=>'success'
                      );
                return Redirect()->route('aboutus')->with($notification); 
            }
   		}

		public function DeleteAbout($id)
		{
			DB::table('aboutus')->where('id',$id)->delete();
            $notification=array(
                'messege'=>'Aboutus Deleted',
                'alert-type'=>'success'
                );
        	return Redirect()->back()->with($notification);
		}




	public function slider_data()
    {
    	$slider = DB::table('sliders')->get();
        return view('Admin_view.slider',compact('slider'));
    }


    public function create_slider(Request $request)
    {
    	$validatedData = $request->validate([
        'slider_head' => 'required|unique:sliders',
        'slider_details' => 'required',
        ]);

        $data=array();
        $data['slider_head']=$request->slider_head; 
        $data['slider_details']=$request->slider_details; 
        $image=$request->file('slider_image');

        if ($image) {

                $image_name= date('dmy_Hsi');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/slider/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
              
                $data['slider_image']=$image_url;
                $brand=DB::table('sliders')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Slider Inserted',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);                      
            }else{
              $brand=DB::table('sliders')
                          ->insert($data);
                 $notification=array(
                     'messege'=>'Done!',
                     'alert-type'=>'success'
                      );
                return Redirect()->back()->with($notification); 
            }
    }


    public function EditSlider($id)
    {
    	$data = DB::table('sliders')->where('id', $id)->first();	
    	return response()->json([$data]);	
    }


    public function UpdateSlider(Request $request)
    {


    	$oldlogo=$request->oldimage;
      $sl_id=$request->id;
        $data=array();
        $data['slider_head']=$request->slider_head; 
        $data['slider_details']=$request->slider_details; 
        $image=$request->file('slider_image');

            if ($image) {
                unlink($oldlogo);
                $image_name= date('dmy_Hsi');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/slider/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['slider_image']=$image_url;
                $brand=DB::table('sliders')->where('id',$sl_id)->update($data);
                    $notification=array(
                     'messege'=>'Successfully Slider Updated ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('sliderimage')->with($notification);                      
            }else{
              $brand=DB::table('sliders')->where('id',$sl_id)->update($data);
                 $notification=array(
                     'messege'=>'Update without image!',
                     'alert-type'=>'success'
                      );
                return Redirect()->route('sliderimage')->with($notification); 
            }
   		}

		public function Deleteslider($id)
		{
			DB::table('sliders')->where('id',$id)->delete();
            $notification=array(
                'messege'=>'Slider Deleted',
                'alert-type'=>'success'
                );
        	return Redirect()->back()->with($notification);
		}
   		
    //end section
}
