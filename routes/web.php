<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
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

Route::get('/', [ApplicationController::class, 'index'])->name('index');
Route::post('/', [ApplicationController:: class, 'store'])->name('store');

Route::get('/edit/{id}',[ApplicationController:: class, 'edit']);
Route::post('/edit/{id}',[ApplicationController:: class, 'update']);

Route::get('/delete/{id}',[ApplicationController:: class, 'delete']);

Route::get('/about', [ApplicationController:: class, 'about'])->name('about');

Route::get('/news', [ApplicationController:: class, 'news'])->name('news');
Route::get('/contact', [ApplicationController:: class, 'contact'])->name('contact');