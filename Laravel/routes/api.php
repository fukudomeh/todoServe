<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// Route::group(['middleware' => ['api', 'cors']], function(){
//     Route::options('articles', function() {
//         return response()->json();
//     });
//     Route::resource('articles', 'Api\ArticlesController');
// });Route::get('sample', function () { echo 'sample api'; });
Route::get('/',ListController::class);
Route::post('/create',CreateController::class);
Route::put('/update/{id}',UpdateController::class);
Route::delete('/delete/{id}', DeleteController::class);