<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthenticationController;
use App\Http\Controllers\API\PublicationController;
use App\Http\Controllers\API\UserDataController;
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
    $resp = $request->user(); 
    return response()->json($resp);
});


//laravel sanctum
Route::post('register',[AuthenticationController::class,'register']);
Route::post('login',[AuthenticationController::class,'login']);

Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::post('logout',[AuthenticationController::class,'logout']);

    //all methods user
    Route::get('user/all',[UserController::class,'allUsers']);
    Route::get('user/mostrar/{user}',[UserController::class,'show']);
    
    Route::post('user/new',[UserController::class,'store']);
    
    Route::put('user/update/{user}',[UserController::class,'update']);
    
    Route::delete('user/delete/{user}',[UserController::class,'destroy']);
    
    //methods user data
    Route::get('datauser/{user}',[UserDataController::class,'show']);
    Route::post('datauser/new',[UserDataController::class,'store']);
    Route::put('datauser/update/{user}',[UserDataController::class,'update']);
    // ---- nota para eliminar los datso de un usuario se elimina directamente el usuario 
    
    
    // methods publication 
    Route::get('publication',[PublicationController::class,'index']);
    Route::get('publication/{publication}',[PublicationController::class,'show']);
    
    Route::post('publication/new',[PublicationController::class,'store']);
    Route::put('publication/update/{publication}',[PublicationController::class,'update']);
    Route::delete('publication/delete/{publication}',[PublicationController::class,'destroy']);
    
});


// ---------------------
// forma para englobar todos lo metodos en una sola ruta
// Route::apiResource('user/',UserController::class);
