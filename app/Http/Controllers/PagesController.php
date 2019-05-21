<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Distance;
use App\BikeGame;
use App\Bike;

class PagesController extends Controller{

  public function privacyPolicy(){
    return view('pages.privacy-policy');
  }

  public function termsAndconditions(){
     return view('pages.terms-and-conditions');
  }

  public function lobby(Request $request){
    if ($request->serial_number!=null) {
        $bike = Bike::where('serial_number', $request->serial_number)->first();
        if ($bike) {
            session()->put('serial_number', $bike->serial_number);
        }  
        else{
            session()->put('serial_number', null);
        } 
    }
    $bikeGames = BikeGame::all(); 
    return view('pages.lobby', ['bikeGames'=>$bikeGames]);
  }


  public function create(){
      $distances = Distance::all();
      return view('pages.create', ['distance_id'=>$distances]);
    } 

  public function ranking(Request $request){
    if (!$request->distance){
      $distance = 5;
      }
    else{
      $distance = $request->distance;
  }
    return view('pages.ranking', array('distance' => $distance));

  }   

  public function BikesList(){
    return view('pages.bikeslist');
  } 
  

}