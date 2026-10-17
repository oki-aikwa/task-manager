<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

// 認証が必要なルート
Route::middleware('auth')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::get('/tasks', fn() => 'タスク一覧（準備中）')->name('tasks.index');
});
