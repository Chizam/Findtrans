<?php

namespace Findtrans\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Findtrans\Http\Controllers\Controller;
use Findtrans\Trip;
use Findtrans\City;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.trips.addtrips')->with('cities', City::all() );
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

        $this->validate($request, [
            'tickets' => 'required|max:25',
            'from' => 'required|max:255',
            'to' => 'required|max:255',
            'time'=>'required',
            'price'=>'required',
            'date'=>'required|date'

            ]);


            
        $trip = new Trip;

        $trip->tickets = $request->tickets;
        $trip->from = $request->from;
        $trip->to = $request->to;
        $trip->price = $request->price;
        $trip->departure_time = $request->time;
        $trip->departure_date = $request->date;



        $trip->save();
        return redirect()->back()->with('status', 'new trip successfully added!');
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
        $trip = Trip::find($id);
        
        return view('admin.trips.updatetrip')->with('trip' , $trip);
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
