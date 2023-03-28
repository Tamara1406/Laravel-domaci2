<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AranzmanController;
use App\Http\Controllers\TipAranzmanaController;
use App\Http\Controllers\MestoController;

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

Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}',[UserController::class,'show']);

Route::get('/aranzman',[AranzmanController::class,'index']);
//Route::get('/aranzman/{id}',[AranzmanController::class,'show']);

Route::get('/tip',[TipAranzmanaController::class,'index']);
Route::get('/tip/{id}',[TipAranzmanaController::class,'show']);

Route::get('/mesto',[MestoController::class,'index']);
Route::get('/mesto/{id}',[MestoController::class,'show']);


Route::resource('aranzman', AranzmanController::class);