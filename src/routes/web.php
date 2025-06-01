<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Todo機能
Route::get('/', [TodoController::class, 'index']);
