<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('home');
});

Route::post('/add-number', [HomeController::class, 'addNumber'])->name('add-number');
Route::get('/terms-of-service', [HomeController::class, 'termsService'])->name('terms-of-service');
Route::get('/cookie-policy', [HomeController::class, 'cookiePolicy'])->name('cookie-policy');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
