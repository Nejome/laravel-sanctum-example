<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', function (Request $request){
    if(auth()->attempt($request->only(['email', 'password']))){
        return response(['status' => 1]);
    }else{
        return response(['message' => 'Please check your email and password and try again', 'status' => 0]);
    }
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/logout', function () {
    auth()->guard('web')->logout();
    return response('logged out');
});
