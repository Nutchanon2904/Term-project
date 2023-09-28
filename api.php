<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\CategoryApiController;
use Spatie\FlareClient\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resource('/user', UserApiController::class);
Route::get('/user/search/{name}', [UserApiController::class,'search']);

Route::resource('/product', ProductApiController::class);
Route::get('/product/search/{name}', [ProductApiController::class,'search']);

Route::resource('/category', CategoryApiController::class);
Route::get('/category/search/{name}', [CategoryApiController::class,'search']);