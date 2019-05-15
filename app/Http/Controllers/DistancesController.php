<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistancesController extends Controller
{
  public function index(){
     return view('distances.index');
  }

  public function create(){
     return view('distances.create');
  }
}
