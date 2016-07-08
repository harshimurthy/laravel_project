# laravel_project
All about Laravel

##laravel framework

MVC architecture


##Path

+ Routes: app> http> routes.php
+ Views: resources> views >vendor>


##Synonyms

+ Route::get('about',function() is same as Route::get('/about',function()

+ return view('pages/about'); is same as return view('pages.about');

+ Different ways of passing array in views: $people=['matt','adam','joe'];
	+ return view('welcome',['people'=>$people]);
	+ return view('welcome',compact('people')); #preferred
	+ return view('welcome')->with('people',$people);
	+ return view('welcome')->withPeople($people);
	+ return view('welcome',[]);
	+ return View::make();
