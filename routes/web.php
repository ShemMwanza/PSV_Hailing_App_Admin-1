<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FirebaseController;

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

Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
Route::get('/adminViews/landing', [MainController::class, 'landing'])->name('landing');
Route::get('/adminViews/drivers', [MainController::class, 'drivers'])->name('drivers');
Route::get('/login', [MainController::class, 'login'])->name('login');
Route::get('/test', [MainController::class, 'test'])->name('test');
Route::get('/phpfirebase_sdk',[FirebaseController::class, 'index']);