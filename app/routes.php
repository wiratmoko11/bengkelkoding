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

<<<<<<< HEAD

Route::group(['before'=>'unauth'], function()
{
	Route::group(['prefix'=>'signup'], function()
	{
		Route::get('', function()
		{
			return Redirect::to('signup/1');
		});

		Route::get('1', ['as'=>'signup1', 'uses'=>'BengkelkodingController@getSignUp1']);

		Route::get('2', ['as'=>'signup2', 'uses'=>'BengkelkodingController@getSignUp2']);

		Route::get('3', ['as'=>'signup3', 'uses'=>'BengkelkodingController@getSignUp3']);

		Route::post('2', ['as'=>'signup2', 'uses'=>'UserController@saveUserStep2']);
	});
=======
Route::group(['before'=>'unauth'], function()
{
	Route::get('signup', array('as'=>'signup', 'uses'=>'UserController@create'));
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348

	Route::get('login', array('as'=>'login', 'uses'=>'UserController@login'));

	Route::post('signup', array('as'=>'signup', 'uses'=>'UserController@store'));

	Route::post('signin', array('as'=>'signin','uses'=>'UserController@doLogin'));
});

Route::group(['before'=>'auth'], function()
{
<<<<<<< HEAD
	Route::get('dashboard', array('as'=>'dashboard', 'before'=>'Auth', 'uses'=>'BengkelkodingController@dashboard'));
=======
	Route::get('dashboard', array('as'=>'dashboard', 'before'=>'Auth', 'uses'=>'UserController@dashboard'));
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348

	Route::get('forum/create', array('as'=>'createThread', 'uses'=>'ForumController@create'));

	Route::post('forum/create', array('as'=>'postThread', 'uses'=>'ForumController@store'));

	Route::get('logout', array('as'=>'logout', 'uses'=>'UserController@logout'));

	Route::post('tutorial/create', array('as'=>'createTutorial', 'uses'=>'TutorialController@store'));

	Route::get('tutorial/create', function()
	{
		return View::make('tutorial.create');
	});

	Route::post('thread_comment', array('as'=>'threadComment', 'uses'=>'ForumController@storeComment'));

	Route::post('editprofil', array('as'=>'editProfil', 'uses'=>'UserController@updateProfil'));

	Route::post('editphoto', array('as'=>'editPhoto', 'uses'=>'UserController@updateFoto'));

	Route::post('upvotethread', array('as'=>'upvotethread', 'uses'=>'ForumController@upvote'));

<<<<<<< HEAD
	Route::post('follow/status/{status}', array('as'=>'follow', 'uses'=>'BengkelkodingController@follow'));

});

Route::group(['prefix'=>'tutorial'], function()
{
	Route::get('',['as'=>'getAllTutorial', 'uses'=>'ForumController@index']);

	Route::get('{id}', function()
	{	
		return 'Specific Tutorial by id';
	});

	Route::get('create', function()
	{
	
		return View::make('tutorial.create');
	});

	Route::post('', function()
	{
		return 'Post Tutorial';
	});

	Route::post('vote', function()
	{
		return 'vote';
	});

	Route::put('{id}', function()
	{
		return 'edit/update Tutorial by id';
	});

	Route::delete('id', function()
	{
		return 'delete tutorial by id';
	});
});
=======
});

>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348

Route::get('/', function()
{
	return View::make('welcome');
});

Route::get('forum', array('as'=>'forumIndex', 'uses'=>'ForumController@index'));

Route::get('forum/{id}/{judul}', array('as'=>'showThread', 'uses'=>'ForumController@show'));

<<<<<<< HEAD
//Route::get('tutorial', array('as'=>'tutIndex', 'uses'=>'TutorialController@index'));


Route::get('{username}', array('as'=>'profil', 'uses'=>'UserController@getUser'));
=======
Route::get('tutorial', array('as'=>'tutIndex', 'uses'=>'TutorialController@index'));


Route::get('{username}', array('as'=>'profil', 'uses'=>'UserController@show'));
>>>>>>> 48c5be4b21eac2e5eab936a87c7e48bf4e4ad348

Route::get('tutorial/{id}/{judul}', array('as'=>'showTutorial', 'uses'=>'TutorialController@show'));

Route::get('signup/finishing', function()
{
	Return View::make('form.signup-1');
});




