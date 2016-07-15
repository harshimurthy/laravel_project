<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



class CardsController extends Controller
{
    public function index()
    {
		return view('cards.index');
		#$cards=\App\Cards::all();
    	#return view('cards/index',compact('cards'));
    }
}
