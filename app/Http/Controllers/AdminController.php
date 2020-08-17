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


    public function UpdateAbout(Request $request, $id)
    {
    	$oldlogo=$request->oldimage;
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
                $brand=DB::table('aboutus')->where('id',$id)->update($data);
                    $notification=array(
                     'messege'=>'Successfully About Updated ',
                     'alert-type'=>'success'
                    );
                return Redirect()->route('aboutus')->with($notification);                      
            }else{
              $brand=DB::table('aboutus')->where('id',$id)->update($data);
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
   		



    //end section
}
