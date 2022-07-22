<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;

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


Route::post('register',[AuthController::class,'store']);
Route::view('/register','register')->name('register');

Route::view('/login','login')->name('login');
Route::post('login',[AuthController::class,'check']);

Route::get('/logout', [AuthController::class,'logout']);

Route::view('/createtransaction','createTransaction')->name('create_transaction');
Route::post('createtransaction',[TransactionController::class,'store']);

Route::get('transactions',[TransactionController::class, 'show'])->name('transactions');
Route::get('delete/{id}',[TransactionController::class, 'delete'])->name('delete');
Route::get('edit/{id}',[TransactionController::class, 'edit'])->name('edit');
Route::post('edit',[TransactionController::class, 'update'])->name('update');

Route::group(['middleware'=>['auth.check']],function(){
    Route::get('/', [AuthController::class,'dashboard'])->name('dashboard');   

    Route::get('users',[AuthController::class, 'show'])->name('users');
});
