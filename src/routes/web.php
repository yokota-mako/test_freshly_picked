<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::get('/',[ProductController::class, 'index']);

Route::get('/register', [RegisterController::class, 'create']) ->name('register.create');
Route::post('/products', [RegisterController::class, 'store']);

Route::get('/products/{id}', [ProductController::class, 'show'])->name('show');
