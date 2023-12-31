<?php

use App\Http\Controllers\UserController;
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


// Auth
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.app.dashboard', ['type_menu' => 'dashboard']);
    })->name('home');
    Route::resource('user', UserController::class);

});

Route::redirect('/', '/login');