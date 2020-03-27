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

Route::get('/category/{category}/topic', function ($category) {
    // $topic = Topic::where('category', $category)->get();
    return view('topics.topic', compact('category'));
});


// For managing topics
Route::get('/admin/topics/create','TopicController@create')->name('topic.create');
Route::post('/admin/topics/new', 'TopicController@store')->name('topic.store');
Route::get('/admin/topics','TopicController@list')->name('topics.list');
Route::get('/admin/topics/{id}/edit','TopicController@edit')->name('topic.edit');
Route::post('/admin/topics/{id}/update','TopicController@update')->name('topic.update');
Route::get('/admin/topics/{id}/delete','TopicController@delete')->name('topic.delete');

// For managing questions
Route::get('/admin/topics/{id}/questions/create', 'QuestionController@create')->name('question.create');
Route::post('/admin/topics/{id}/questions/new', 'QuestionController@store')->name('question.store');
Route::get('/admin/topics/{id}/questions','QuestionController@list')->name('questions.list');
Route::get('/admin/topics/{id}/questions/{question_id}/edit','QuestionController@edit')->name('question.edit');
Route::patch('/admin/topics/{id}/questions/{question_id}/update','QuestionController@update')->name('question.update');
Route::get('/admin/topics/{id}/{question_id}/delete','QuestionController@delete')->name('question.delete');
