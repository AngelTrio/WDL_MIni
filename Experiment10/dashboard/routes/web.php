<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;

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

Route::view('count','layouts.dashboard');
Route::view('survey','layouts.user');
Route::view('update','layouts.admin_update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
		Route::get('count', function () {
	    return view('layouts.dashboard');
	});
		Route::get('dashboard',[SubscribeController::class,'show']);
		Route::get('count',[SubscribeController::class,'total']);
		Route::delete('role-delete/{id}',[SubscribeController::class,'userdelete']);
		Route::get('survey',[SurveyController::class,'people']);
		Route::get('update',[DashboardController::class,'profile']);
		Route::post('/updated',[DashboardController::class,'registerd']);
});


Route::get('/corona', function () {
    return view('frontend.index');
});
Route::post('/subscribe',[SubscribeController::class,'addData'])->name('subscribe.send');

Route::get('/corona',[ContactController::class,'contact']);
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

Route::get('/corona',[SurveyController::class,'display']);
Route::post('/surveyed',[SurveyController::class,'details'])->name('survey.send');


