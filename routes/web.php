<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/portfolio-details', [PortfolioController::class, 'show'])->name('portfolio.details');
Route::get('/portfolio-details1', function () {
    return view('portfolio-details1');
});
Route::get('/portfolio-details2', function () {
    return view('portfolio-details2');
});
Route::get('/portfolio-details3', function () {
    return view('portfolio-details3');
});
