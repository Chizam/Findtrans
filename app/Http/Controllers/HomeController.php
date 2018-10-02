<?php

namespace Findtrans\Http\Controllers;

use Illuminate\Http\Request;
use Findtrans\Addroute;

use Findtrans\Trip;
use Findtrans\Bus;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $bus = Bus::all();
        $search = request()->search;

        if($search) {
            $trips = Trip::where('from', 'LIKE', '%'. $search . '%')
                    ->orWhere('to', 'LIKE', '%'. $search . '%')
                    ->paginate(4);
        } else {
            $trips = Trip::latest()->paginate(5);           
        }
        return view('home')->with('trips', $trips)
                            ->with('buses', $bus);
                            

       
    }
}
