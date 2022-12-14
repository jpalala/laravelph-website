<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return view('welcome_to_laravelph');
});

//Auth::routes(['register' => false]);
Route::get('/login',  [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');



Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
//# Route::get('/testemail', App\Http\Controllers\EmailtestController::class)->name('test-email');

Route::get('/team-reg', [App\Http\Controllers\TeamRegController::class, 'register'])->name('team-reg');

require __DIR__.'/auth.php';
