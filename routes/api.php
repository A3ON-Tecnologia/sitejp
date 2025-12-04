<?php

use App\Http\Controllers\ExternalPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/external/posts', [ExternalPostController::class, 'store'])
    ->middleware(['inbound.api', 'throttle:30,1']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
