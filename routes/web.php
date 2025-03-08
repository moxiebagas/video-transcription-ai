<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AudioTranscriptionController;

Route::get('/welcom', function () {
    return view('welcome');
});
Route::get('/', [AudioTranscriptionController::class, 'showUploadForm'])->name('upload.form');
Route::post('/process-video', [AudioTranscriptionController::class, 'processVideoAndTranscribe'])->name('process.video');