<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bikegame;
use App\Distance;

class BikeGamesController extends Controller
{

  public function store(Request $request){
  	$bikegame = new Bikegame;
  	$bikegame->title = $request->title;
		$bikegame->distance_id = 1;
		$bikegame->created_by = 1;
		$bikegame->status = 1;
  	$bikegame->no_of_players = $request->no_of_players;
  	$bikegame->save();
  	
 		return redirect()->route('bikegames.match');
  } 	

	public function index() {
		$bike_games = BikeGame::all();
		return view('bike_games.index')->with(compact('bike_games'));
	}

	public function create(){
    $distances = Distance::all();
	  return view('bike_games.create', ['distances'=>$distances]);
  }	

	public function bikeGamesMatch(){
    return view('bike_games.match');
	}
	
}
