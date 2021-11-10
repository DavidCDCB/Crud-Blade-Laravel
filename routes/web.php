<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\CategoryController;

use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('web')->group(function () {
	Route::get('/prueba', function () {
		return 'Hola';
	});
	
	//Route::get('/controlador/{id}', [Controlador::class,'index']);

	//php artisan route:list
	Route::resource('/usuario',Controlador::class);
	Route::get('/usuario/delete/{usuario}', [Controlador::class,'delete'])->name('usuario.delete');

	Route::resource('/category',CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);z
});



//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

