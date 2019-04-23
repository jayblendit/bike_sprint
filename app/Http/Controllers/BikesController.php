<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bike;

class BikesController extends Controller
{
    public function index(){
    	return view('bikes.index');
    }

    public function store(Request $request){
    	$bike = Bike::where('serial_number', $request->serial_number)->first();
    	if(!$bike){
    		$bike = new Bike;
    		$bike->serial_number = $request->serial_number;
    		$bike->save();
    	}

    	return response()->json(['status'=>'ok','message'=>'Bike serial saved.']);

    }
}
