<?php

use App\Http\Controllers\ItemController;
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
//show the home page
Route::get('/', [ItemController::class ,'index']);

//create items 

Route::get('/item/create',[ItemController::class,'create']);

//store items

Route::post('/item',[ItemController::class,'store']);

//view items

Route::get('/item/{item}',[ItemController::class,'show']);