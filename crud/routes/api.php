<?php

use App\Http\Controllers\APIKesehatanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//buat link API untuk data yang telah dibuat
Route::group(['namespace' => 'Kesehatan'], function() { 
    Route::get('api_DataKesehatan', [APIKesehatanController::class, 'getAll']);         //method get API
    Route::post('api_DataKesehatan', [APIKesehatanController::class, 'add']);           //method post API
    Route::put('api_DataPendidikan', [APIKesehatanController::class, 'update']);        //method put (update) API
    Route::delete('api_DataPendidikan', [APIKesehatanController::class , 'delete']);    //method delete API
});