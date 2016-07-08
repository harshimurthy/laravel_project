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
	return 'You clicked on About';
});


