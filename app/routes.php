<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('post', 'Post');
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/blog', 'PagesController@blog');
Route::get('post/{post}', function(Post $post)
{
	echo $post->title;
});
Route::get('/contact', 'PagesController@contact');
Route::post('/mail', 'PagesController@mail');
Route::get('/env', function()
{
	dd(App::environment());
});