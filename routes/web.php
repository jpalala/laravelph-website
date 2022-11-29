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
Route::mixin(new \Laravel\Ui\AuthRouteMethods());
Route::auth(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
# Route::get('/testemail', App\Http\Controllers\EmailtestController::class)->name('test-email');

Route::get('/team-reg', [App\Http\Controllers\TeamRegController::class, 'register'])->name('team-reg');

Route::post('/team-reg/create', [App\Http\Controllers\TeamRegController::class, 'create'])->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
