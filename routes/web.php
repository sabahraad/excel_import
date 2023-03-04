<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/file-import',[UserController::class,'importView'])->name('import-view');
Route::post('/import',[UserController::class,'importeee'])->name('import');
Route::get('/export-users',[UserController::class,'exportUsers'])->name('export-users');
Route::get('/reg',[UserController::class,'reg'])->name('reg');
