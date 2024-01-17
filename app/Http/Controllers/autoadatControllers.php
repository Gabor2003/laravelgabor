<?php

namespace App\Http\Controllers;

use App\Models\autoadat;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class autoadatController extends Controllerv
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $autoadat=autoadat::all();
        return view('car-listing',compact ('autoadat'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploadcar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($contents=$request->file('carpic')){
            $name=$contents->getClientOriginalName();
            $contents->move('uploads',$name);

            $autoadat = new autoadat([
                "user_id"=>$request->get('user_id'),
                "carname" => $request->get('carname'),
                'carprice'=> $request->get('carprice'),
                'carmodel'=> $request->get('carmodel'),
                'carseats'=> $request->get('carseats'),
                'address'=> $request->get('address'),
                'personnumber'=> $request->get('personnumber'),
                'posttype'=> $request->get('posttype'),
                'location'=> $request->get('location'),
                "carpic" => $name

            ]);

            $autoadat->save();
        
            return redirect(url('home'));
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autoadat  $autoadat
     * @return \Illuminate\Http\Response
     */
    public function show($carid)
    {
    $autoadat = autoadat::select('*')
    ->where('id', '=', $carid)
    ->get();
    return view('autoadat',compact('autoadat'));
    }
    

    public function withdriver()
    {
    $autoadat = autoadat::select('*')
    ->where('posttype', '=', 'With Driver')
    ->get();
    return view('admin/cartype',compact('autoadat'));
    }

    public function withoutdriver()
    {
    $autoadat = autoadat::select('*')
    ->where('posttype', '=', 'Without Driver')
    ->get();
    return view('admin/cartype',compact('autoadat'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autoadat  $autoadat
     * @return \Illuminate\Http\Response
     */
    public function edit($carid )
    {
        
        $autoadat = autoadat::select('*')
        ->where('id', '=', $carid)
        ->get();
        return view('editcar',compact('autoadat'));
   // return view('editcar',compact('autoadat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\autoadat  $autoadat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, autoadat $car_details)
    {

        $data=$request->validate([
                'carname'=>'required',
                'carprice'=>'required',
                'carmodel'=>'required',
                'carseats'=>'required',
                'address'=>'required',
                'personnumber'=>'required',
                'posttype'=>'required',
                'location'=>'required',
    
            ]);
            $car_details->update($data);
            return redirect(url('car-listing'));
            
   

            // return redirect()->route('products.index')
            //     ->with('success', 'Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autoadat  $autoadat
     * @return \Illuminate\Http\Response
     */
    public function destroy(autoadat $car_details)
    {
        $car_details->delete();
        return redirect(url('home'));
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userpost($id)
    {
        

    $autoadat = autoadat::select('*')
    ->where('user_id', '=', $id)
    ->get();
    return view('myposts',compact('autoadat'));

     
    }

    public function allcars()
    {
        $autoadat=autoadat::all();
        return view('admin/cartype',compact ('autoadat'));
     
    }
}