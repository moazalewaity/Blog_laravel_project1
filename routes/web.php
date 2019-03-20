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

Route::get('/','HomeController@Home');

Route::get('post/{id}' ,[ 'as'=>'home.post' ,'uses'=>'AdminPostsController@post'] );


Route::group(['middleware'=>['admin' , 'verified'] , 'prefix'=>'admin/'] , function(){

      
		Route::get('/' , 'AdminController@index');

	Route::get('settings', 'Settings@setting')->name('settings');
	Route::post('settings', 'Settings@setting_save')->name('settingsP');
    
	Route::resource('users' , 'AdminUsersController');
	Route::resource('posts' , 'AdminPostsController');
	Route::resource('categories' , 'AdminCategoriesController');
	Route::resource('media' , 'AdminMediasContoller');

	Route::resource('comment' , 'PostCommentsContoller');
	Route::resource('comment/replies' , 'CommentRrpliesContoller');
	//Route::get('media/upload' , ['as'=>'admin.medai.upload' , 'uses'=>'AdminMediasContoller@upload']);

});


Auth::routes(['verify'=>true]);



Route::get('/home', 'HomeController@index')->name('home');
