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
}
