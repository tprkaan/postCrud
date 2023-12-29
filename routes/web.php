<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\PostController::class,'index']);
Route::get('/post-add',[\App\Http\Controllers\PostController::class,'create'])->name('post.add');
Route::post('/post-add',[\App\Http\Controllers\PostController::class,'store'])->name('post.store');
Route::get('/post-detail/{id}',[\App\Http\Controllers\PostController::class,'show'])->name('post.show');
Route::get('/post-edit/{id}',[\App\Http\Controllers\PostController::class,'edit'])->name('post.edit');
Route::post('/post-edit',[\App\Http\Controllers\PostController::class,'update'])->name('post.update');
Route::get('/post-delete/{id}',[\App\Http\Controllers\PostController::class,'destroy'])->name('post.delete');
