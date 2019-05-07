<?php

namespace App\Http\Controllers;

use App\Distance;
use Illuminate\Http\Request;
use App\BikeGame;

class PagesController extends Controller{

<<<<<<< HEAD
    public function termsAndconditions(){
   		return view('pages.terms-and-conditions');
    }

    public function lobby(){
    	return view('pages.lobby');
    }
=======
  public function privacyPolicy(){
    return view('pages.privacy-policy');
  }

  public function termsAndconditions(){
     return view('pages.terms-and-conditions');
  }
>>>>>>> master

  public function lobby(){
    $bikeGames = BikeGame::all();
    return view('pages.lobby', ['bikeGames'=>$bikeGames]);
  }

<<<<<<< HEAD
    public function create(){
      $distances = Distance::all();
      return view('pages.create', ['distance_id'=>$distances]);
	  }	
=======
>>>>>>> master

  public function create(){
    return view('pages.create');
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
}