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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', function () 
{
    return view('category');
});

Route::get('/category/{category}/topic', function ($category) 
{
    // $topic = Topic::where('category', $category)->get();
    return view('topics.topic', compact('category'));
});


// For managing topics
Route::get('/admin/topics/create','TopicController@create')->name('topic.create');
Route::post('/admin/topics/new', 'TopicController@store')->name('topic.store');
Route::get('/admin/topics','TopicController@list')->name('topics.list');
// Route::get('/topics/{id}/edit','TopicController@edit')->name('edit');
// Route::post('/topics/{id}/update','TopicController@update')->name('update');
// Route::get('/topics/{id}/delete','TopicController@delete')->name('delete');