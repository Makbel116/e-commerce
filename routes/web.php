<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
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

//view item

Route::get('/item/{item}',[ItemController::class,'show']);

//edit item

Route::get('/item/{item}/edit',[ItemController::class,'edit']);

//update item

Route::put('/item/{item}',[ItemController::class,'update']);

//delete item
Route::delete('/item/{item}',[ItemController::class,'destroy']);


//register for user
Route::get('/register',[UserController::class,'create']);

//to store a user

Route::post("/users",[UserController::class,'store']);


//to log out a user

Route::post("/logout",[UserController::class,'logout']);

//to login a user

Route::get("/login",[UserController::class,'login']);


///user authentcation

Route::post("/user/authentcation",[UserController::class,'authentcation']);