<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// user and login

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/logout', 'LogoutController@index');

Route::get('/home/create', 'HomeController@create');
Route::post('/home/create', 'HomeController@store');




Route::group(['middleware' => ['userSess']],function(){
	Route::get('/home', 'HomeController@index');
	
	Route::get('/user', 'UserController@index');

	Route::get('/user/edit', 'UserController@edit');
	Route::put('/user', 'UserController@update');

	Route::get('/user/delete', 'UserController@delete');
	Route::delete('/user', 'UserController@destroy');

	// user food stage 
	Route::get('/under', 'ProductController@under');
	Route::get('/normal', 'ProductController@normal');
	Route::get('/over', 'ProductController@over');

	 // Cart
	
    Route::get('/showcart','ProductController@showcart');
	Route::post('/add-to-cart','ProductController@addcart');

    Route::post('/remove/{id}','ProductController@remove');


	//order
	Route::get('/addOrder','ProductController@addorder');
    

	
  

});

	// admin
	Route::get('/admin', 'AdminController@index');
	Route::post('/admin', 'AdminController@verify');

	Route::group(['middleware' => ['adminSess']],function(){
      
      // userInfo handle
	Route::get('/admin/home', 'AdminController@adminhome');

	Route::get('/userInfo', 'AdminController@userinfo');
	Route::post('/searchUser', 'AdminController@searchuser');

	Route::get('/userInfo/{id}/edit', 'AdminController@edit');
	Route::put('/userInfo/{id}', 'AdminController@update');

	Route::get('/userInfo/{id}/delete', 'AdminController@delete');
	Route::delete('/userInfo/{id}', 'AdminController@destroy');


	// order Information		
	Route::get('/orderInfo', 'AdminController@orderinfo');
	Route::post('/ordersearch', 'AdminController@ordersearch');



	// product

	Route::get('/product', 'ProductController@index');
    
	Route::post('/search', 'ProductController@search');



	Route::get('/product/create', 'ProductController@create');
	Route::post('/product', 'ProductController@store');

	Route::get('/product/{id}/edit', 'ProductController@edit');
	Route::put('/product/{id}', 'ProductController@update');

	Route::get('/product/{id}/img', 'ProductController@img');
	Route::put('/product/{id}/img', 'ProductController@imgupdate');


	Route::get('/product/{id}/delete', 'ProductController@delete');
	Route::delete('/product/{id}', 'ProductController@destroy');

   });


Route::get('/', function () {
    return view('welcome');
});
