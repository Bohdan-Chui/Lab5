<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'main'])->name('main');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/sign-up', [MainController::class, 'sign'])->name('sign');

Route::post('/sign-up', [MainController::class, 'save_form'])->name('save_form');