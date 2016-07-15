<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/* When you load the homepage, do the mentioned function - Open welcome.php page in views
http://localhost
*/
Route::get('/', function () {
    return view('welcome');
    /*It is also possible to return a string
    return 'Hi there'; */
});

/* When user wants to view the about from the homepage 
http://localhost:8000/about
Even '/about' works in the below statement
*/

Route::get('about',function() 
{
	//return 'You clicked on About';

	/* Open pages folder in views and open about.blade.php
	Even 'pages.about' works */
	return view('pages/about');
});

Route::get('/',function()
{
	$people= ['Taylor','Matt', 'Jeffrey'];
	/* 
	load a view called welcome and pass the variable people
	There are different ways to write this. Check synonyms of readme
	But the following is the preferred appraoch*/
	return view('welcome',compact('people'));

});

/*
	Using controllers
	Pages controller is the name of of the file in controller(app>Http>Controllers)
	home is the method name
	On going to localhost:8000/contact, the contents in home methos are displayed
*/
Route::get('contact','PagesController@home');

Route::get('products','PagesController@products');

//To fetch all cards
Route::get('cards','CardsController@index');

?>


