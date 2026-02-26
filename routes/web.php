<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Praktikum 1: Basic Routing
Route::get('/', [PageController::class, 'home']);

Route::get('/hello', [PageController::class, 'hello']);

Route::get('/world', [PageController::class, 'world']);

// Praktikum 2: More routes using Controller
Route::get('/about', [PageController::class, 'about']);

// Praktikum 3: Route dengan parameter
Route::get('/user/{name}', [PageController::class, 'user']);

Route::get('/post/{id}', [PageController::class, 'post']);

Route::get('/user/{name}/post/{id}', [PageController::class, 'userPosts']);
