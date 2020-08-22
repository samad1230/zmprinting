<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
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
        //print_r($category);

        $product = DB::table('products')
        ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        ->select('products.*', 'categories.category_name')
        ->get();
     $category = DB::table('categories')->get();
        return view('Admin_view.product',compact('product','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        'pd_name' => 'required|unique:products',
        'details' => 'required',
        ]);


        $data=array();
        $data['pd_name']=$request->pd_name;
        $data['category_id']=$request->product_cat;
        $data['fabric']=$request->fabric;
        $data['details']=$request->details;
        $data['status']=$request->status;
        $data['shape']=$request->shape;
        $data['embroidery']=$request->embroidery;
        $data['printing']=$request->printing;
        $data['rate']=$request->rate;
        $image=$request->file('pd_image');

        if ($image) {

                $image_name= date('dmy_Hsi');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/product/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);

                $data['pd_image']=$image_url;
                $brand=DB::table('products')
                          ->insert($data);
                    $notification=array(
                     'messege'=>'Successfully Product Inserted',
                     'alert-type'=>'success'
                    );
                return Redirect()->back()->with($notification);
            }else{
              $brand=DB::table('products')
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = DB::table('products')
        ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
        ->select('products.*', 'categories.category_name')
        ->where('products.id', $id)->first();
        //->get();
       return response()->json([$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $oldlogo=$request->oldimage;
        $pd_id=$request->pd_id;
        $catidold=$request->catid_old;
        $cat_id=$request->product_cat;

        if ($cat_id==null){
            $newcatid = $catidold;
        }else{
            $newcatid = $category_id;
        }

        $data=array();
        $data['pd_name']=$request->pd_name;
        $data['category_id']=$newcatid;
        $data['fabric']=$request->fabric;
        $data['status']=$request->status;
        $data['details']=$request->details;
        $data['shape']=$request->shape;
        $data['embroidery']=$request->embroidery;
        $data['printing']=$request->printing;
        $data['rate']=$request->rate;
        $image=$request->file('pd_image');

        if ($image) {
                unlink($oldlogo);
                $image_name= date('dmy_Hsi');
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='media/product/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['pd_image']=$image_url;
                $brand=DB::table('products')->where('id',$pd_id)->update($data);
                    $notification=array(
                     'messege'=>'Successfully Product Updated ',
                     'alert-type'=>'success'
                    );

               return Redirect()->back()->with($notification);
            }else{
              $brand=DB::table('products')->where('id',$pd_id)->update($data);
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
       $deletecat = $product;
        $deletecat->delete();
         $notification=array(
                     'messege'=>'Successfully Product Deleted ',
                     'alert-type'=>'success'
                    );
         return Redirect()->back()->with($notification);
    }
}
