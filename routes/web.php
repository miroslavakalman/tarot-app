<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarotController;

Route::get('/', [TarotController::class, 'index']);
Route::post('/generate', [TarotController::class, 'generate']);
Route::post('/interpret', [TarotController::class, 'interpret']);
