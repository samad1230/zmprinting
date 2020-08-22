<?php

namespace App\Http\Controllers;

use App\Factory;
use Illuminate\Http\Request;

class FactoryController extends Controller
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
        $factorydata = Factory::all();
        //print_r($category);
        return view('Admin_view.factory',compact('factorydata'));
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
            'factory_on'=>'required',
       ]);

       $factory = new Factory();
       $factory ->factory_on=$request->factory_on;
       $factory ->production_capacity=$request->production_capacity;
       $factory ->employe_male=$request->employe_male;
       $factory ->employe_female=$request->employe_female;
       $factory->save();

        $notification=array(
             'messege'=>'Successfully Factory Inserted',
             'alert-type'=>'success'
            );
        return Redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function show(Factory $factory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function edit(Factory $factory)
    {
       return response()->json([$factory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factory $factory)
    {
        $update_factory = $factory;
        $update_factory ->factory_on=$request->factory_on;
        $update_factory ->production_capacity=$request->production_capacity;
        $update_factory ->employe_male=$request->employe_male;
        $update_factory ->employe_female=$request->employe_female;
        $update_factory->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factory $factory)
    {
        //
    }
}
