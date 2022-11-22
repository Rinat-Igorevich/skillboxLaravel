<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::view('/about', 'layout.about');

//задачи
Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/tasks/create', [TasksController::class, 'create']);
Route::get('/tasks/{task}', [TasksController::class, 'show']);

Route::post('/tasks', [TasksController::class, 'store']);

//статьи
Route::get('/', [ArticleController::class, 'index']);
Route::get('/articles/create', [ArticleController::class, 'create']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);

Route::post('/articles', [ArticleController::class, 'store']);

//Контакты
Route::get('/contacts', [ContactController::class, 'create']);
Route::get('/admin/contacts', [ContactController::class, 'index']);

Route::post('/contacts', [ContactController::class, 'store']);
