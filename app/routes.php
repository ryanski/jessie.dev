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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', function()
{
	return View::make('homepage');
});

Route::get('/aboutMe', function()
{
	return View::make('aboutMe');
});

Route::get('/contact', function()
{
	return View::make('contact');
});

Route::get('/neighborhoods', function()
{
	return View::make('neighborhoods');
});

Route::get('/projects', function()
{
	return View::make('projects');
});

Route::get('/media', function()
{
	return View::make('media');
});

