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

   public function ranking(){
   		return view('pages.ranking5k');
   }

   public function rankingg(){
   		return view('pages.ranking10k');
   }

   public function rankinggg(){
   		return view('pages.ranking15k');
   }
>>>>>>> cec45e05e96b61d12a1e4cc91862f2d1577b1cf2
}
