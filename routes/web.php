<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $title='Politani';
    return view('welcome',compact('title'));
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('admin/article', 'ArticleController');

Route::resource('admin/portfolio', 'PortfolioController');

Route::resource('admin/announcement', 'AnnouncementController');

Route::resource('admin/news', 'NewsController');

Route::resource('admin/comment', 'CommentController');

Route::resource('admin/team', 'TeamController');

Route::resource('admin/client', 'ClientController');

Route::resource('admin/testimonial', 'TestimonialController');

Route::resource('admin/service', 'ServiceController');

Route::resource('admin/configuration', 'ConfigurationController');










Auth::routes();

Route::get('/home', 'HomeController@index');
