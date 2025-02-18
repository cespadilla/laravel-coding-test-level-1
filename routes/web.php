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
Route::get('/', [App\Http\Controllers\EventController::class,'index'])->name("home");
Route::get('/api-fetch', [App\Http\Controllers\EventController::class,'apiFetch'])->name("api-fetch");

Route::resource("events", "App\Http\Controllers\EventController");
Route::group(["middleware"=>"auth"], function(){
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');

});


require __DIR__.'/auth.php';
