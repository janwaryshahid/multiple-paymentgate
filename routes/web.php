<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckOutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::GET('buy_now',[CheckOutController::class,'buyNow'])->name('buy.now');
Route::POST('checkout',[CheckOutController::class,'checkOut'])->name('checkout');
Route::get('success',function(){
    
    session()->flush('cart');
return redirect()->route('index');
})->name('success');
Route::get('cencle',function(){
    return "cencle";
    })->name('cencle');