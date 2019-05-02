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
    		$bikegame->no_of_player = $request->no_of_players;
    		$bikegame->save();
    	

    	return redirect()->route('lobby');
    }
}
