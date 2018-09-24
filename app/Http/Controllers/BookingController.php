<?php

namespace Findtrans\Http\Controllers;

use Findtrans\Booking;
use Findtrans\Trip;
use Findtrans\City;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coming = request()->from;
        $going = request()->to;

        $trips = Trip::where('from', 'LIKE', '%' . $coming. '%')
                    ->where('to', 'LIKE', '%' . $going. '%')
                    ->get();
                    
        if(count($trips) > 0){

        return view('search')->with('trips', $trips);
            
        }
        else{
            return view('welcome')->withErrors('No Details found. Try to search again !');
        }
        
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:15',
            'tickets'=>'required',

            ]);


        $cities =City::all();
        $booking = new Booking;

        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->tickets = $request->tickets;
        



        $booking->save();

        return view('welcome')->with('cities', $cities);
        /*return redirect()->back()->with('status', 'new trip successfully added!');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \Findtrans\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Findtrans\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Findtrans\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Findtrans\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
