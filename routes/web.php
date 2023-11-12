<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','welcome');
Route::view('/add','pages.admin.add-product');
Route::view('single/{id}','pages.user.single-product');
Route::view('/add-category','pages.admin.add-category');
Route::view('/men','pages.admin.men');
Route::post('/insert-category',[categoryController::class,'addCategory']);
Route::post('/insert-product',[productController::class,'insertProduct']);



Route::get('/',[productController::class,'getProducts']);
Route::get('single/{id}',[productController::class,'findProduct']);
Route::get('add',[categoryController::class,'getCategory']);