<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubirImgController;

Route::get('/upload', [SubirImgController::class, 'showForm'])->name('upload.form');
Route::post('/upload', [SubirImgController::class, 'upload'])->name('upload.handle');