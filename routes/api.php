<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthenticationController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\PublicationController;
use App\Http\Controllers\API\UserDataController;
use App\Http\Controllers\API\ImagesPublicationController;
use App\Http\Controllers\API\NotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Controladores Esteban
use App\Http\Controllers\API\ReportController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\TypeNotificationController;
use App\Http\Controllers\API\TypesPublicationController;
use App\Http\Controllers\API\LikeController;
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
    
});
Route::get('user/all',[UserController::class,'allUsers']);

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
// methods publication 
Route::get('publication',[PublicationController::class,'index']);
Route::get('publication/{publication}',[PublicationController::class,'show']);
Route::post('publication/new',[PublicationController::class,'store']);
Route::put('publication/update/{publication}',[PublicationController::class,'update']);
Route::delete('publication/delete/{publication}',[PublicationController::class,'destroy']);

// methods images_publication
Route::get('images_publication/{ImagesPublication}',[ImagesPublicationController::class,'show']);
Route::post('images_publication/new',[ImagesPublicationController::class,'store']);
Route::put('images_publication/update/{ImagesPublication}',[ImagesPublicationController::class,'update']);
Route::delete('images_publication/delete/{ImagesPublication}',[ImagesPublicationController::class,'destroy']);


// methods comment
Route::get('comment/{comment}',[CommentController::class,'show']);
Route::post('comment/new',[CommentController::class,'store']);
Route::put('comment/update/{comment}',[CommentController::class,'update']);
Route::delete('comment/delete/{comment}',[CommentController::class,'destroy']);

// methods notification
Route::get('notification/{notification}',[NotificationController::class,'show']);
Route::post('notification/new',[NotificationController::class,'store']);
Route::delete('notification/delete/{notification}',[NotificationController::class,'destroy']);

    //Rutas Añadidas Por Esteban
    
   
  //Methods Reports
  Route::get('reports',[ReportController::class,'index']);//Y
  Route::post('reports',[ReportController::class,'store']);//Y
  Route::get('reports/{report}',[ReportController::class,'show']);//Y
  Route::put('reports/{report}',[ReportController::class,'update']);//Y
  Route::delete('reports/{report}',[ReportController::class,'destroy']);//Y

  //Methods TypesNotification
  Route::get('typenotification',[TypeNotificationController::class,'index']);//Y
  Route::post('typenotification',[TypeNotificationController::class,'store']);//Y
  Route::get('typenotification/{TypeNotification}',[TypeNotificationController::class,'show']);//Y
  Route::put('typenotification/{TypeNotification}',[TypeNotificationController::class,'update']);//Y
  Route::delete('typenotification/{TypeNotification}',[TypeNotificationController::class,'destroy']);//Y

  //Methods TypesPublication 
  Route::get('typespublication',[TypesPublicationController::class,'index']);//Y
  Route::post('typespublication',[TypesPublicationController::class,'store']);//Y
  Route::get('typespublication/{typepublication}',[TypesPublicationController::class,'show']);//Y
  Route::put('typespublication/{typepublication}',[TypesPublicationController::class,'update']);//Y
  Route::delete('typespublication/{typepublication}',[TypesPublicationController::class,'destroy']);//Y

  //Methods Role
  Route::get('role',[RoleController::class,'index']);//Y
  Route::post('role',[RoleController::class,'store']);//Y
  Route::get('role/{role}',[RoleController::class,'show']);//Y
  Route::put('role/{role}',[RoleController::class,'update']);//Y
  Route::delete('role/{role}',[RoleController::class,'destroy']);//Y

  //Methods Likes 
  Route::get('like',[LikeController::class,'index']);//Y
  Route::post('like',[LikeController::class,'store']);//Y
  Route::get('like/{like}',[LikeController::class,'show']);//Y
  Route::put('like/{like}',[LikeController::class,'update']);//Y
  Route::delete('like/{like}',[LikeController::class,'destroy']);//Y


// ---------------------
// forma para englobar todos lo metodos en una sola ruta
// Route::apiResource('user/',UserController::class);
