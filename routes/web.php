<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Requests\AuthRequest;

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


Route::post('register',[AuthRequest::class,'store']);
Route::view('/register','register')->name('register');

Route::view('/login','login')->name('login');
Route::post('login',[AuthController::class,'check']);

Route::get('/logout', [AuthController::class,'logout']);

Route::group(['middleware'=>['auth.check']],function(){
    Route::get('/', [AuthController::class,'dashboard'])->name('/');   

    Route::get('users',[AuthController::class, 'show'])->name('users');
});
