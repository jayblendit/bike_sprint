<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bike;

class BikesController extends Controller
{
    public function getSerial(){
    	return view('bikes.get-serial');
    }

    public function store(Request $request){
    	$bike = Bike::where('serial_number', $request->serial_number)->first();
    	if(!$bike){
    		$bike = new Bike;
    		$bike->serial_number = $request->serial_number;
    		$bike->save();
    	}

    	return response()->json(['status'=>'ok','message'=>'Bike serial saved.']);

        $data=$request->input();
        $request->sesion()->put('SerialKey', $data);
        $serialnum=$request->session()->get('SerialKey');           
    }

    public function rpm(Request $request){
        $bike = Bike::where('serial_number', $request->serial_number)->first();

        if($bike){
            $bike->rpm = $request->rpm;
            $bike->save();

            $response = [
                'status'=>'ok',
                'message'=>'Bike rpm saved.'
            ];
        }else{
            $response = [
                'status'=>'ko',
                'message'=>'No bike found.'
            ];
        }
        return response()->json($response);
    }

    public function getRpm(Request $request){
        $bike = Bike::where('serial_number', $request->serial_number)->first();

        if($bike){
            $response = [
                'status'=>'ok',
                'rpm'=> $bike->rpm
            ];
        }else{
            $response = [
                'status'=>'ko',
                'message'=>'No bike found.'
            ];
        }
        return response()->json($response);
    }

    public function index(){
        return view('bikes.index');
    
    } 
}
