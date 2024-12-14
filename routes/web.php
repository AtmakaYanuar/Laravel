<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products',[ProductsController::class,'products']);
Route::get('/add',[ProductsController::class,'add']);
Route::post('/store',[ProductsController::class,'store']);
Route::get('/edit/{id}',[ProductsController::class,'edit']);
Route::post('/update/{id}',[ProductsController::class,'update']);
Route::get('/delete',[ProductsController::class,'delete']);
Route::get('/cetak',[ProductsController::class,'cetak']);

