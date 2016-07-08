# laravel_project
All about Laravel

##laravel framework

MVC architecture


##Path

+ Routes: app> http> routes.php
+ Views: resources> views >vendor>
+ Controllers: app>Http>Controllers>


## Basic command line commands

+ create new project
	laravel new name_of_project
+ Open server
	php artisan serve
+ create a new controller
	php artisan make:controller NameOfController

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
