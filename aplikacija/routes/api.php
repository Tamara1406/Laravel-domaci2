<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AranzmanController;
use App\Http\Controllers\TipAranzmanaController;
use App\Http\Controllers\MestoController;
use App\Http\Controllers\UserAranzmanController;
use App\Http\Controllers\MestoAranzmanController;
use App\Http\Controllers\API\AuthController;




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

//Route::get('/users',[UserController::class,'index']);
//Route::get('/users/{id}',[UserController::class,'show']);

//Route::get('/aranzman',[AranzmanController::class,'index']);
//Route::get('/aranzman/{id}',[AranzmanController::class,'show']);

Route::get('/tip',[TipAranzmanaController::class,'index']);
Route::get('/tip/{id}',[TipAranzmanaController::class,'show']);

Route::get('/mesto',[MestoController::class,'index']);
Route::get('/mesto/{id}',[MestoController::class,'show']);


Route::resource('users', UserController::class);

Route::resource('aranzman', AranzmanController::class);

//Ugnjezdeni resursi
Route::get('/users/{id}/ar',[UserAranzmanController::class,'index']);
Route::get('/mesto/{id}/ar',[MestoAranzmanController::class,'index']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::get('/profile', function(Request $request){
        return auth()->user();
    });
    Route::resource('aranzman', AranzmanController::class)->only(['update', 'store', 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

