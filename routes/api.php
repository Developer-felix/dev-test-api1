<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

// Route::resource('v1/products',ProductController::class);

//Protected Routes
Route::group(['middleware'=>'auth:sanctum'], function () {
    Route::put('v1/products/{product}',[ProductController::class,'update']);
    Route::post('v1/products',[ProductController::class,'store']);
    Route::delete('v1/products/{product}',[ProductController::class,'destroy']);
    Route::post('v1/users/logout',[AuthController::class,'logout']);
});

//Public Routes
Route::post('v1/users/register',[AuthController::class,'register']);

Route::post('v1/users/login',[AuthController::class,'login']);

Route::get('v1/products',[ProductController::class,'index']);

Route::get('v1/products/{product}',[ProductController::class,'show']);

Route::get('v1/products/search/{name}',[ProductController::class,'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
