<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// composer create-project --prefer-dist laravel/laravel prueba
// https://github.com/fruitcake/laravel-cors

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//php artisan route:list
Route::apiResource('/controladorApi',ApiController::class);

Route::get('/querys/{query}', [ApiController::class,'querys']);
