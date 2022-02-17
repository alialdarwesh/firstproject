<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('land' , 'Front\UserController@showLanding');
//
////weltest
//Route::get('index' , 'Front\UserController@showIndex');
//
//Route::get('about', function (){
//   return view('about');
//});
//
//Route::get('/test1', function () {
//    return 'Welcome Ali ';
//}) -> name('a');
//
//Route::get('/test2/{id}', function ($id) {
//    return $id;
//}) -> name('b');
//
//Route::get('/test3/{id?}', function () {
//    return 'Welcome optional parameter';
//});
//
//Route::group(['namespace' => 'Admin'] , function (){
//    Route::get('second','SecondController@showString') -> middleware('auth');
//    Route::get('second1','SecondController@showString1');
//    Route::get('second2','SecondController@showString2');
//    Route::get('second3','SecondController@showString3');
//});
//
//Route::get('login',function (){
//    return 'must be login to access';
//}) -> name('login');
//
//Route::resource('news','NewsController');


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') ->middleware('verified');
