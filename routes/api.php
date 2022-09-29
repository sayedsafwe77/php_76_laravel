<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/product', [App\Http\Controllers\Api\ProductController::class, 'index']);
Route::get('/product/{id}', [App\Http\Controllers\Api\ProductController::class, 'show']);
Route::post('/product', [App\Http\Controllers\Api\ProductController::class, 'store']);
Route::put('/product/{id}', [App\Http\Controllers\Api\ProductController::class, 'update']);
