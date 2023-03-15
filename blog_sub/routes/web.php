<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\bcatController;
use App\Http\Controllers\blogsController;
use Illuminate\Support\Facades\Route;

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
});



Route::controller(authController::class)->group(function(){
    Route::get('/login','login');
    Route::post('/login','login2');
});
Route::controller(bcatController::class)->group(function(){
    
});
Route::controller(blogsController::class)->group(function(){
    
});
