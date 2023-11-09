<?php

use App\Http\Controllers\PastesController;
use Illuminate\Support\Facades\Route;

Route::get('/paste/{paste}', [PastesController::class, 'show']);
Route::post('/paste', [PastesController::class, 'paste']);
