# laravel_project
All about Laravel

##laravel framework

MVC architecture


##Path

+ Routes: app> http> routes.php
+ Views: resources> views >vendor>
+ Controllers: app>Http>Controllers>
+ SAAS: resources>assets>saas
+ Css and JS in public folder


## Basic command line commands

+ create new project
	+ laravel new name_of_project
+ To get all the methods supported by laravel
	+ php artisan
+ Open server
	+ php artisan serve
+ create a new controller
	+ php artisan make:controller NameOfController
+ Laravel Eloquent
	+ php artisan make:model NameOfCard
+ To get details about a method
	+ php artisan help name_of_method
+ To create a migration
	+ php artisan make:migration mention_what_you_are_doing --create=name_of_card
	+ php artisan make:migration create_cards_table --create=cards
+ To migrate to the card
	+ php artisan migrate
+ To play around with database and see how it works
	+ php artisan tinker

##Synonyms

+ Route::get('about',function() is same as 
	+ Route::get('/about',function()

+ return view('pages/about'); 
	+ view('pages.about');

+ Different ways of passing array in views: $people=['matt','adam','joe'];
	+ return view('welcome',['people'=>$people]);
	+ return view('welcome',compact('people')); #preferred
	+ return view('welcome')->with('people',$people);
	+ return view('welcome')->withPeople($people);
	+ return view('welcome',[ ]);
	+ return View::make();

## General Notation/ Common convention
+ General notation for different cards
	+ To display all the cards 
		> Route::get('cards','CardsController@index'); 
	+ To create a card
		> Route::get('cards/create','CardsController@create');
	+ To handle the process of creating a card
		> Route::post('cards','CardsController@store');
	+ To show a specific card
		> Route::post('cards/1','CardsController@show');
	+ To show a form to edit the specific card
		> Route::post('cards/1/edit','CardsController@edit');
	+ To update the card
		> Route::put('cards/1','CardsController@update');
	+ To delete a card
		> Route::delete('cards/1','CardsController@destroy');


## Details
	
###Generic CSS
	+ Create a generic html file, i.e,. Layout.blade.php
		+ Have @yield(‘content’) included in the page wherever the content has to be replaced

	+ When you create a new page, say, about.blade.php : include these
		+ @extends(‘layout’) # file you want to extend from
		+ @section(‘content’) # include whatever new you want inside this
		+@stop # stops

