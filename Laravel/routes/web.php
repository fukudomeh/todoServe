<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;
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

Route::get('/',ListController::class);
Route::post('/create',CreateController::class);
Route::put('/update/{id}',UpdateController::class);
Route::delete('/delete/{id}', DeleteController::class);