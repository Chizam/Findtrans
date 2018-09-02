<?php

namespace Findtrans\Http\Controllers;

use Illuminate\Http\Request;
use Findtrans\Addroute;

class AddrouteController extends Controller
{
  public function show(){
    	return view('addroute');
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

        $routes=  Addroute::all();
    	return view('home')->with('routes', $routes);

    }

}
