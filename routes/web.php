<?php
use App\Topic;
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
    $topics = Topic::paginate(10);
    return view('topics.topic', compact('category','topics'));
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

// For answering the questions  
Route::get('/topics/{topic_id}/questions/{question_id}/answer/new', 'AnswerController@start')->name('start');
// Route::post('/topics/{topic_id}/results', 'AnswerController@results')->name('results');

Route::get('/test', function () {
    return view('/answers.answer');
});

//  For follow-follower functional
Route::get('/userlist', 'UserController@userlist')->name('userlist');
Route::get('/users/{user_id}/show','UserController@show')->name('users.show');
Route::get('/follow/{followed_id}/','UserController@follow')->name('user.follow');
Route::get('/unfollow/{followed_id}/','UserController@unfollow')->name('user.unfollow');
// Route::get('/users/{user_id}/followinglist','UserController@followinglist')->name('users.followinglist');
// Route::get('/users/{user_id}/followerslist','UserController@followerlist')->name('users.followerslist');