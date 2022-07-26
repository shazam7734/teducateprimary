<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/curriculum', function () {
    return view('curriculum');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/survey', function () {
    return view('survey');
});

Route::view('form','userview');
Route::post('submit','Companies@save');
//Maps the surveycontroller and establishes a route for when the user submits the survey form
Route::post("/survey", [App\Http\Controllers\SurveyController::class, 'store']);

Route::get('surveys',['SurveyController@index']);
