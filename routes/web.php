<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/', function () {
    return view('welcome');
});


Route::controller(Controller::class)->group(function(){
    Route::get('/', 'homepage')->name('homepage'); 
    Route::get('/post', 'post')->name('post');
    Route::get('/setting', 'settinguser')->name('setting');
        

});
Route::controller(UserController::class)->group(function(){

    Route::get('/setting', 'settinguser')->name('setting');
});

Route::controller(PostController::class)->group(function(){

    Route::get('/showPost', 'show')->name('show');
    Route::get('/showPost', 'show')->name('show');
});

require __DIR__.'/auth.php';
