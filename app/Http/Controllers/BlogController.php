<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use DB;
class BlogController extends Controller
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
         $blogdata = Blog::all();
        //print_r($category);
        return view('Admin_view.blog',compact('blogdata'));
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
        'title' => 'required|unique:blogs',
        'blog_content' => 'required',
        ]);

        $data=array();
        $data['title']=$request->title;
        $data['blog_content']=$request->blog_content;
        $image=$request->file('image');

        if ($image) {
            $image_name= date('dmy_Hsi');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='media/blog/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $data['image']=$image_url;
            $brand=DB::table('blogs')
                      ->insert($data);
                $notification=array(
                 'messege'=>'Successfully Blog Inserted',
                 'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }else{
            $brand=DB::table('blogs')
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
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
