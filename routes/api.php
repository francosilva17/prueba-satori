<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\TicketController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/admin', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum', AdminMiddleware::class);

Route::middleware(['auth:sanctum', AdminMiddleware::class])->group(function () {
    Route::apiResource('/books', BookController::class);

    Route::apiResource('/categories', CategoryController::class);

    Route::apiResource('/publishers', PublisherController::class);

    Route::apiResource('/tickets', TicketController::class);
});

// Autenticación
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
