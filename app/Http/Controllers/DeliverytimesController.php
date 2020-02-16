<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deliverytime;
use App\City;
use Illuminate\Support\Facades\DB;
class DeliverytimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      $deliverytimes= DB::table('deliverytimes')
    ->join('cities', 'deliverytimes.city_id', '=', 'cities.id')
     ->get(array(
        'namecity',
        'delivery_at'
     ));
        return view('deliverytimes.index',['deliverytimes'=>$deliverytimes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('deliverytimes.create',[ 'cities'=>City::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
          
           'delivery_at'=>'min:2|required'
        ]);

        $deliverytime=new Deliverytime();
        $deliverytime->city_id=$request->input('selectcity');   
        $deliverytime->delivery_at=$request->input('delivery_at');   
        $deliverytime->save();

        $request->session()->flash('status','Delivery time was created !!');
        return redirect()->route('deliverytimes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
