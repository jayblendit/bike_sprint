<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bikegame;

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
    	
   		return redirect()->route('lobby');
	}	

	public function index()
	{
		$bike_games = BikeGame::all();
		//return redirect('/bikegames/index')->with(compact('bike_games'));
		return view('lobby')->with(compact('bike_games'));
	}
}
