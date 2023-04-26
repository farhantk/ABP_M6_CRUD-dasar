<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/product', [productController::class, 'index']);
Route::get('/product/create', [productController::class, 'create']);
Route::post('/product/create', [productController::class, 'store']);
Route::get('/product/{id}/edit', [productController::class, 'edit']);
Route::get('/product/{id}/update', [productController::class, 'update']);
Route::delete('/product/{id}/del', [productController::class, 'destroy']);