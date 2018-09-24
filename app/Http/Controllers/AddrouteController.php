<?php

namespace Findtrans\Http\Controllers;

use Illuminate\Http\Request;
use Findtrans\Addroute;
use Findtrans\Trip;

class AddrouteController extends Controller
{
    public function show(){
    	return view('addroute')->with('routes', Addroute::all());
    }

    public function add_journey(){


    	$request = request();

    	$this->validate($request,[
    		'days' => 'required|max:255',
            

    		]);

    	$route = new Addroute;

    	$route->days = $request->days;
    	$route->route = $request->route;
    	$route->time = $request->move_time;

    	$route->save();

    	return view('home')->with('routes', Addroute::all())
                            ->with('trips', Trip::paginate(5));

    }

}
