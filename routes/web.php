<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubirImgController;

Route::get('/', [SubirImgController::class, 'showForm'])->name('upload.form');
Route::post('/', [SubirImgController::class, 'upload'])->name('upload.handle');