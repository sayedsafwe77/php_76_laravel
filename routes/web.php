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

Route::middleware('isadmin')->group(function () {
    Route::delete('/product/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::post('/test/validation', [\App\Http\Controllers\Auth\LoginController::class, 'testValidtion'])->name('test.validation');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Auth::routes(['register' => true]);

// api
// request
// response

Route::get('/', function () {
    // dd(Auth::user());
    return view('welcome');
})->middleware('auth');
