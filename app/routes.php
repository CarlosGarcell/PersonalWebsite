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
Route::get('/contact', 'PagesController@contact');
Route::post('/mail', 'PagesController@mail');
Route::get('/env', function()
{
	dd(App::environment());
});

Route::get('phpinfo', function()
{
	echo phpinfo();
});

Route::get('mongov', function()
{
	echo phpversion("mongo");
});

Route::get('mongodb_insert', function()
{
	$developer = array(
		'firstName' => 'Jorge',
		'lastName' => 'Garcell',
		'career' => 'Software Developer' 
	);

	$options = array('w' => 1);

	// Configuration
	$dbHost = 'localhost:27018';
	$dbName = 'test';

	// Connect to test database
	$client = new MongoClient("mongodb://$dbHost");
	$db = $client->$dbName;

	// Get the users collection
	$developersCollection = $db->developers;

	//Insert new user
	$insertOperation = $developersCollection->insert($developer);

	if ($insertOperation['ok'] == 1) {
		return Redirect::to('/')->with(['message' => 'User was created successfully']);
	}
});

Route::get('mongodb_remove', function() 
{
	$user = array('firstName' => 'Jorge');

	// Configuration
	$dbHost = 'localhost:27018';
	$dbName = 'test';

	// Connect to test database
	$client = new MongoClient("mongodb://$dbHost");
	$db = $client->$dbName;

	// Get the users collection
	$usersCollection = $db->users;

	// Remove user from collection
	$removeOperation = $usersCollection->remove($user, array('w' => 1));

	if ($removeOperation['ok'] == 1) {
		var_dump($removeOperation['ok']);
	}

	if ($removeOperation['ok'] == 1) {
		return Redirect::to('/')->with(['message' => 'User deleted successfully']);
	}
});

Route::get('moongodb_find', function() 
{
	MongoLog::setModule(MongoLog::ALL);
	MongoLog::setLevel(MongoLog::ALL);

	$user = array("name" => "Gustavo");

	// Configuration
	$dbHost = 'localhost:27018';
	$dbName = 'test';

	// Connect to test database
	$client = new MongoClient("mongodb://$dbHost");
	$db = $client->$dbName;

	// Get the users collection
	$developersCollection = $db->developers;

	//Insert new user
	$cursor = $developersCollection->find();

	foreach ($cursor as $user) {
		var_dump($user);
	}
});

Route::get('mongo_count', function()
{
	// Configuration
	$host = 'mongodb://localhost:27018';
	$dbName = 'test';

	// Connect to test database
	$client = new MongoClient($host);
	$db = $client->selectDB($dbName);

	$docs = $db->test->find();

	var_dump($docs);

	// Get the users collection
	$developersCollection = $db->developers;

	echo $developersCollection->count();
});