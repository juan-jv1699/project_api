<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthenticationController;
use App\Http\Controllers\API\UserDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Controladores Esteban
use App\Http\Controllers\API\ReportController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\TypeNotificationController;
use App\Http\Controllers\API\TypesPublicationController;
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
    Route::get('user/all',[UserController::class,'allUsers']);
    Route::post('logout',[AuthenticationController::class,'logout']);

    //all methods user
    
    Route::get('user/mostrar/{user}',[UserController::class,'show']);
    
    Route::post('user/new',[UserController::class,'store']);
    
    Route::put('user/update/{user}',[UserController::class,'update']);
    
    Route::delete('user/delete/{user}',[UserController::class,'destroy']);
    
    //methods user data
    Route::get('datauser/{user}',[UserDataController::class,'show']);
    Route::post('datauser/new',[UserDataController::class,'store']);
    Route::put('datauser/update/{user}',[UserDataController::class,'update']);
    // ---- nota para eliminar los datso de un usuario se elimina directamente el usuario 


    //Rutas Añadidas Por Esteban


        //Methods Reports
        Route::get('reports',[ReportController::class,'index']);
        Route::post('reports',[ReportController::class,'store']);
        Route::get('reports/{report}',[ReportController::class,'show']);
        Route::put('reports/{report}',[ReportController::class,'update']);
        Route::delete('reports/{report}',[ReportController::class,'destroy']);

        //Methods TypesPublication 
        Route::get('typespublication',[TypesPublicationController::class,'index']);
        Route::post('typespublication',[TypesPublicationController::class,'store']);
        Route::get('typespublication/{typepublication}',[TypesPublicationController::class,'show']);
        Route::put('typespublication/{typepublication}',[TypesPublicationController::class,'update']);
        Route::delete('typespublication/{typepublication}',[TypesPublicationController::class,'destroy']);

        //Methods TypesNotification
        Route::get('notification',[TypeNotificationController::class,'index']);
        Route::post('notification',[TypeNotificationController::class,'store']);
        Route::get('notification/{TypeNotification}',[TypeNotificationController::class,'show']);
        Route::put('notification/{TypeNotification}',[TypeNotificationController::class,'update']);
        Route::delete('notification/{TypeNotification}',[TypeNotificationController::class,'destroy']);
        
        
        //Methods Role
        Route::get('role',[RoleController::class,'index']);
        Route::post('role',[RoleController::class,'store']);
        Route::get('role/{role}',[RoleController::class,'show']);
        Route::put('role/{role}',[RoleController::class,'update']);
        Route::delete('role/{role}',[RoleController::class,'destroy']);
    });

    
   

// ---------------------
// forma para englobar todos lo metodos en una sola ruta
// Route::apiResource('user/',UserController::class);
