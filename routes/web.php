<?php

use App\Http\Controllers\WelcomeController;
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

// Route::get('/test', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return "<h1>Welcome to Lavarel 9!</h1>";
// });

Route::get('/test', function () {
    return view('home', ['name' => 'Tuyen']);
});

Route::get('/welcome', [WelcomeController::class, 'index']);