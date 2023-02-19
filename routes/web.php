<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs',[JobsController::class, 'index'])->name('jobindex');
Route::get('/create',[JobsController::class,'create'])->name('createjob');
Route::post('/store',[JobsController::class,'store'])->name('storejob');
Route::get('/edit/{id}',[JobsController::class,'edit'])->name('editjob');
Route::post('/update/{id}',[JobsController::class,'update'])->name('updatejob');
Route::get('/delete/{id}',[JobsController::class,'delete'])->name('deletejob');



