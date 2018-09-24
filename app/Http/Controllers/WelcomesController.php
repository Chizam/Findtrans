<?php

namespace Findtrans\Http\Controllers;


use Illuminate\Http\Request;
use Findtrans\City;
use Illuminate\Support\Facades\Cache;

class WelcomesController extends Controller
{
    Public function index()
    {
    	/*$cities = Cache::remember('City', 576, function(){
    		return City::all();
    	});*/

    	$cities = City::all();
    	return view ('welcome')->with('cities', $cities);
    }
}
