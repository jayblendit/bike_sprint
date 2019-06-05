<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\BikeGame;
use App\Distance;
use Auth;

class BikeGamesController extends Controller
{

  public function store(Request $request){
  	$bikegame = new BikeGame;
  	$bikegame->title = $request->title;
		$bikegame->distance_id = 1;
		$bikegame->created_by = 1;
		$bikegame->status = 1;
  	$bikegame->no_of_players = $request->no_of_players;
  	$bikegame->save();
  	
 		return redirect()->route('bikegames.match', ['id'=>$bikegame->id]);
  } 	

	public function index() {
		$bike_games = BikeGame::all();
		return view('bike_games.index')->with(compact('bike_games'));
	}

	public function create(){
    $distances = Distance::all();
	  return view('bike_games.create', ['distances'=>$distances]);
  }	

	public function bikeGamesMatch(Request $request){ 
      $match = BikeGame::find($request->id);
      return view('bike_games.match', compact("match"));
}    
	

  public function bikeGameMatchLeave(Request $request){
    $match = BikeGame::find($request->id);

    //check who creates the match
    if($match->created_by === Auth::user()->id){
      $match->delete();
      return redirect()->route('lobby');
    }else{
      //remove the player from match players
      return redirect()->route('lobby');
    }
  }
}
