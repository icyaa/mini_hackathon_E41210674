<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/signin', function () {
//     return view('form_add');
// });

Route::prefix("/crud")->group(function(){
    Route::resource("/", userController::class);
    Route::post("/add", [userController::class, 'add']);
    Route::get("/ubah/{id}", [userController::class, 'edit'])->name('crud.ubah');
    Route::put("/edit/{id}", [userController::class, 'update'])->name('crud.edit');
    Route::get('/delete/{kode}', [userController::class, 'delete']);
    Route::get('/form_add' , function(){
        return view('form_add');
    });
    Route::get('/form_edit' , function(){
        return view('form_edit');
    });
});