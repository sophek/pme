<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//$client = new \App\Client();
//$client->first_name = "sophek";
//$client->last_name = "tounn";
//$client->save();
//$client = \App\Client::findOrFail(1);
//$clientInfo = new \App\ClientInfo();
//$clientInfo->client_id = 1;
//$clientInfo->gender= "M";
//$clientInfo->save();


Route::get('/', function () {
    return view('auth.login');
});



Route::get('/education', 'EducationController@index');

Route::get('/api/visit', 'VisitController@index');
Route::get('/api/visit/{id}', 'VisitController@show');

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/foo', 'FooController@index');
Route::post('/foo/store', 'FooController@store');

Route::get('/utils', 'UtilsController@index');
Route::match(['get','post'],'/utils/{controller}/{name?}', 'UtilsController@store');
Route::match(['get','post'],'/client/create', 'ClientController@create');

//Client 
Route::match(['get'],'/client', 'ClientController@index');
Route::match(['get'],'/client/show/{id?}', 'ClientController@show');
Route::match(['get'],'/client/center/{id?}', 'ClientController@clients');

Route::post('/client/store', 'ClientController@store');
Route::match(['post'],'/client/update/{id?}', 'ClientController@update');

Route::match(['get'],'/visit', 'VisitController@index');
Route::match(['get'],'/visit/client/{id?}', 'VisitController@clients');

Route::match(['get','post'],'/visit/create', 'VisitController@create');

//Volunteer
Route::get('/volunteer', 'VolunteerController@index');

//Center
Route::get('/center', 'CenterController@index');

Route::auth();
Route::get('/home', 'HomeController@index');
