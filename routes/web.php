<?php

Route::get('/', function () {
    return view('shop.index');
});
Route::post('/', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Route::get('/notify', function(){
	notify()->flash('You have signed in.', 'success', [
		'timer' => 3000,
	]);
	return redirect()->to('/');
});

Route::get('pdf', 'PDFController@pdf');
Route::get('reportes', 'PDFController@index');
Route::get('crear_reporte_porpais/{tipo}', 'PDFController@crear_reporte_porpais');


Route::get('/translate', function () 
{
	Lang::setLocale('de');
	return view('translate')->with(array(
		'username' => 'Mauri',
		'weather' => 'sunny',
		'newMessages' => 5
	));
});

Route::get('/policy', function () {
    return view('policy');
});
Route::post('/policy', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Route::get('/transport', function () {
    return view('transport');
});
Route::post('/transport', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Route::get('/terms', function () {
    return view('terms');
});
Route::post('/terms', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Route::get('/about', function () {
    return view('about');
});
Route::post('/about', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Route::get('/pay', function () {
    return view('pay');
});
Route::post('/pay', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Route::get('/faq', function () {
    return view('faq');
});
Route::post('/faq', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Route::get('/search', [
	'uses' => 'SearchController@getResults',
	'as' => 'search.results',
]);
Route::post('/search', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

/**Route::get('/', function (Illuminate\Http\Request $request) {
	Mail::to($request->user())->queue(new App\Mail\UserRegistered());
});*/

Route::get('/post/{post}', [
	'as' => 'post.show',
	'uses' => 'PostController@show',
]);
Route::post('/post/{post}', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Route::get('/blog', [
	'as' => 'blog',
	'uses' => 'PostsController@index',
]);
Route::post('/blog', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Route::get('/posts/{tag}', [
	'as' => 'posts.tagged',
	'uses' => 'PostsController@tagged',
]);
Route::post('/posts/{tag}', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));

Auth::routes();

Route::get('/', [ 
	'uses' => 'ProductController@getIndex',
	'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
	'uses' => 'ProductController@getAddToCart',
	'as' => 'product.addToCart',
]);

Route::get('/adding/{id}', [
	'uses' => 'ProductController@getAddByOne',
	'as' => 'product.addByOne' 
]);

Route::get('/reduce/{id}', [
	'uses' => 'ProductController@getReduceByOne',
	'as' => 'product.reduceByOne' 
]);

Route::get('/remove/{id}',[
	'uses' => 'ProductController@getRemoveItem',
	'as' => 'product.remove'
]);

Route::get('/shopping-cart', [
	'uses' => 'ProductController@getCart',
	'as' => 'product.shoppingCart'
]);
Route::post('/shopping-cart', array(
	'Middleware' => 'LanguageSwitch',
	'uses' => 'LanguageController@index',
));



Route::post('/webhook/encoding', 'EncodingWebhookController@handle');

Route::get('/videos/{video}', 'VideoController@show');

Route::post('/videos/{video}/views', 'VideoViewController@create');

Route::get('/videos/{video}/votes', 'VideoVoteController@show');

Route::get('/videos/{video}/comments', 'VideoCommentController@index');

Route::get('barcode', 'BarcodeController@index');



Route::group(['middleware' => ['auth']], function(){

	Route::get('/upload', 'VideoUploadController@index');
	Route::post('/upload', 'VideoUploadController@store');

	Route::get('/videos', 'VideoController@index');		
	Route::get('/videos/{video}/edit', 'VideoController@edit');		
	
	Route::post('/videos', 'VideoController@store');		
	Route::delete('/videos/{video}', 'VideoController@delete');		
	Route::put('/videos/{video}', 'VideoController@update');	

	Route::get('/feedbacks', 'FeedbackController@index');
	Route::post('/feedbacks', 'FeedbackController@store');
	Route::post('/feedbacks/{feedback}/likes', 'FeedbackLikeController@store');
	Route::get('/feedback', function () {
	    return view('feedback');
	});
	Route::post('/feedback', array(
		'Middleware' => 'LanguageSwitch',
		'uses' => 'LanguageController@index',
	));

	Route::get('/checkout', [ 
		'uses' => 'ProductController@getCheckout',
		'as' => 'checkout'
	]);
	Route::post('/checkout', [ 
		'uses' => 'ProductController@postCheckout',
		'as' => 'checkout'
	]);
	Route::post('/checkout', array(
		'Middleware' => 'LanguageSwitch',
		'uses' => 'LanguageController@index',
	));

	Route::get('/rechnung', [ 
		'uses' => 'ProductController@getRechnung',
		'as' => 'rechnung'
	]);
	Route::post('/rechnung', [ 
		'uses' => 'ProductController@postRechnung',
		'as' => 'rechnung'
	]);
	Route::post('/rechnung', array(
		'Middleware' => 'LanguageSwitch',
		'uses' => 'LanguageController@index',
	));

	Route::get('/paypal', [ 
		'uses' => 'ProductController@getPaypal',
		'as' => 'paypal'
	]);
	Route::post('/paypal', [ 
		'uses' => 'ProductController@postPaypal',
		'as' => 'paypal'
	]);
	Route::post('/paypal', array(
		'Middleware' => 'LanguageSwitch',
		'uses' => 'LanguageController@index',
	));

	Route::get('/user/{channel}/orders', [ 
		'uses' => 'ProductController@getProfile',
		'as' => 'user.profile'
	]);
	Route::post('/user/{channel}/orders', array(
		'Middleware' => 'LanguageSwitch',
		'uses' => 'LanguageController@index',
	));

	Route::get('/user/{channel}', 'ChannelController@show');
	Route::post('/user/{channel}', array(
		'Middleware' => 'LanguageSwitch',
		'uses' => 'LanguageController@index',
	));
	Route::get('/users/settings', 'UserSettingsController@edit');
		Route::post('/users/settings', array(
			'Middleware' => 'LanguageSwitch',
			'uses' => 'LanguageController@index',
		));
	Route::put('/users/settings', 'UserSettingsController@update');
	Route::get('/user/{channel}/edit', 'ChannelSettingsController@edit');
		Route::post('/user/{channel}/edit', array(
			'Middleware' => 'LanguageSwitch',
			'uses' => 'LanguageController@index',
		));		
	Route::put('/user/{channel}/edit', 'ChannelSettingsController@update');

	Route::post('/videos/{video}/votes', 'VideoVoteController@create');
	Route::delete('/videos/{video}/votes', 'VideoVoteController@remove');

});


