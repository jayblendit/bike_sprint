<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function privacyPolicy(){
    	return view('pages.privacy-policy');
    }

   public function termsAndconditions(){
   		return view('pages.terms-and-conditions');
   }

   public function lobby(){
   		return view('pages.lobby');
   }


    public function create(){
   		return view('pages.create');
	  }	

   public function ranking($distance = "5"){
   		return view('pages.ranking', array('distance' => $distance));
    }  
}
