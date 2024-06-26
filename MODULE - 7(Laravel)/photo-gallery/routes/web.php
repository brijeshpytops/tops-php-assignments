<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
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

Route::get('/admin', [ImageController::class, 'index'])->name('admin');
Route::post('/admin/upload', [ImageController::class, 'upload'])->name('admin.upload');
Route::get('/gallery', [ImageController::class, 'gallery'])->name('gallery');