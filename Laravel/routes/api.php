<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::middleware(['cors'])->group(function () {
//     // Route::options('accounts', function () {
//     //     return response()->json();
//     // });
//     Route::get('/',"ListController");
//         // Route::post('/create',"CreateController");
//         // Route::put('/update/{id}',"UpdateController");
//         // Route::delete('/delete/{id}', "DeleteController");
// });
Route::middleware(['cors'])->group(function () {
    return Route::get('/',"ListController");
});