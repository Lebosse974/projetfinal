<?php

use App\Http\Controllers\Controller;
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


Route::controller(Controller::class)->group(function(){
    Route::get('/', 'homepage')->name('homepage'); 
    Route::get('/post', 'post')->name('post');
    Route::get('/setting', 'settinguser')->name('setting');
        

});