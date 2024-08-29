<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicTodoList\TodoIndexController;
use App\Http\Controllers\BasicTodoList\TodoShowController;
use App\Http\Controllers\BasicTodoList\TodoStoreController;
use App\Http\Controllers\BasicTodoList\TodoUpdateController;
use App\Http\Controllers\BasicTodoList\TodoDestroyController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('todos', TodoIndexController::class);
Route::get('todos/{id}', TodoShowController::class);
Route::post('todos', TodoStoreController::class);
Route::put('todos/{id}', TodoUpdateController::class);
Route::delete('todos/{id}', TodoDestroyController::class);


