<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('frontend/homepage/home', [ImageController::class, 'home']);
Route::get('frontend/homepage/list', [ImageController::class, 'list']);
Route::get('frontend/homepage/add', [ImageController::class, 'add']);
Route::post('frontend/homepage/add', [ImageController::class, 'insert']);
Route::get('frontend/homepage/edit/{id}', [ImageController::class, 'edit']);
Route::post('frontend/homepage/edit/{id}', [ImageController::class, 'update']);
Route::get('frontend/homepage/delete/{id}', [ImageController::class, 'delete']);
