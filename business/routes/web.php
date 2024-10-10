<?php

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BusinessController;

Route::get('/welcome', [HomeController::class, 'index']);
Route::get('/home', [BusinessController::class, 'home']);
Route::get('/about', [BusinessController::class, 'about']);
Route::get('/service', [BusinessController::class, 'service']);
Route::get('/contact', [BusinessController::class, 'contact']);
Route::post('/contact', [BusinessController::class, 'contactForm']);