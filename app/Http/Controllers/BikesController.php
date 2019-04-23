<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BikesController extends Controller
{
    public function index(){
    	return view('bikes.index');
    }
}
