<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

//Route::resource('info','InfoController');

Route::resource('person','PersonController');

Route::resource('candidate', 'CandidateController');

Route::resource('component', 'ComponentController');

Route::resource('area', 'AreaController');

Route::resource('faculty', 'FacultyController');

Route::get('/facultiesfromarea/{area}', 'MyController@facultiesfromarea');

Route::get('subjectsfromarea/{area}', 'MyController@subjectsfromarea');

Route::get('questionsfromarea/{area}', 'MyController@questionsfromarea');

Route::get('questionsforexam/{area}', 'MyController@questionsforexam');