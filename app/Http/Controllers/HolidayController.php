<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;
use App\City;
use Illuminate\Support\Facades\DB;
class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holiday= DB::table('holidays')
    ->join('cities', 'holidays.city_id', '=', 'cities.id')
     ->get(array(
        'namecity',
        'date_debut',
        'date_fin',
        'status'
     ));
        return view('holidays.index',['holidays'=>$holiday]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holidays.create',[ 'cities'=>City::all()]);
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
            'date_debut'=>'required',
            'date_fin'=>'required',
            'status'=>'min:2|required'
         ]);
 
         $holiday=new Holiday();
         $holiday->city_id=$request->input('selectcity');
         $holiday->date_debut=$request->input('date_debut');   
         $holiday->date_fin=$request->input('date_fin');      
         $holiday->status=$request->input('status');   
         $holiday->save();
 
         $request->session()->flash('status','Holiday was created !!');
         return redirect()->route('holidays.index');
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
