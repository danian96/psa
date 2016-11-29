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

Route::resource('areasubject', 'AreaSubjectController');

Route::resource('faculty', 'FacultyController');

Route::get('/optionsfromquestion/{id}', 'MyController@optionsfromquestion');

Route::get('/areas', 'MyController@getAllAreas');

Route::get('/facultiesfromarea/{area}', 'MyController@facultiesfromarea');

Route::get('subjectsfromarea/{area}', 'MyController@subjectsfromarea');

Route::get('questionsfromarea/{area}', 'MyController@questionsfromarea');

Route::get('questionsforexam/{area}', 'MyController@questionsforexam');

Route::get('createexam/{candidate_id}/{area_id}', 'MyController@storeExam');

Route::get('areaofexam/{exam_id}', 'MyController@areaofexam');

Route::get('answersofexam/{exam_id}', 'MyController@getAnswersFromExam');

Route::post('storeexamanswer/{exam_id}/{question_id}/{option_id}', 'MyController@storeExamAnswer');

Route::post('storefaculty/{id}/{id_area}/{nombre}', 'MyController@storeFaculty');

Route::post('storesubject/{id}/{id_area}/{code}/{name}', 'MyController@storeSubject');

Route::post('storequestion/{id}/{text}/{area_id}/{subject_id}', 'MyController@storeQuestion');

Route::post('storeoption/{id}/{question_id}/{text}/{answer}', 'MyController@storeOption');

