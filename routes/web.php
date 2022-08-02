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

Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/curriculum', function () {
    return view('curriculum');
});

Route::get('/additional', function () {
    return view('additional');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/survey', function () {
    return view('survey');
});

Route::get('/ks1course', function () {
    return view('ks1course');
});

Route::get('/ks2course', function () {
    return view('ks2course');
});

Route::get('/ks1quiz', function () {
    return view('ks1quiz');
});

Route::get('/ks2quiz', function () {
    return view('ks2quiz');
});

Route::get('/certificate', function () {
    return view('certificate');
});

Route::view('form','userview');
Route::post('submit','Companies@save');
//Maps the surveycontroller and establishes a route for when the user submits the survey form
Route::post("/survey", [App\Http\Controllers\SurveyController::class, 'store']);
//Maps the route for the survey results once a user submits data in the survey
Route::get("/Results", [App\Http\Controllers\SurveyController::class,'index']);
//Maps the route for the resources based on survey results
Route::get("/Resources", [App\Http\Controllers\ResourcesController::class,'resources']);


