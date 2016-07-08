<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    

    

    public function products()
    {
    	$people=['adam','bob','joe'];
    	return view('welcome', compact('people'));
    }

    public function home()
    {
    	return 'Lets keep in touch';
    }
}
