<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('product');
// });

Route::get('/',[ProductController::class,'products']);
Route::post('/addproduct',[ProductController::class,'addproducts']);
Route::post('/updateproduct',[ProductController::class,'updateproduct']);
Route::delete('/deleteproduct',[ProductController::class,'deleteproduct']);

