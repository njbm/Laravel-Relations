<?php

use App\Http\Controllers\Backend\User\userController;
use App\Http\Controllers\UserApiCotroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//showUser
Route::get('/users/{id?}',[userController::class,'showUser']);

//get all usr
Route::get('/users',[userController::class,'homeIndex']);

//add User
Route::post('/user/add',[userController::class,'store']);
