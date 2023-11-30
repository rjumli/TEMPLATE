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

Route::get('/', function () {return inertia('Index'); });

Route::middleware(['auth'])->group(function () {
    Route::resource('/home', App\Http\Controllers\HomeController::class);
});

require __DIR__.'/authentication.php';
require __DIR__.'/installation.php';