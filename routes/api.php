<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::post('/auth/generate-api-key', [AuthController::class, 'generateApiKey']);
    Route::post('/auth/regenerate-api-key', [AuthController::class, 'regenerateApiKey']);
});

Route::get('/kecamatan', [KecamatanController::class, 'index'])->middleware('check.api.key');
Route::get('/kelurahan', [KelurahanController::class, 'index'])->middleware('check.api.key');