<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Models\Article::latest()->get()
    ]);
});

Route::get('/posts/{post}', [UserController::class, 'show']);

Route::get('articles/create', [\App\Http\Controllers\ArticlesController::class, 'create']);

Route::get('/articles/{article}', [\App\Http\Controllers\ArticlesController::class, 'show']);

Route::get('/articles',[\App\Http\Controllers\ArticlesController::class, 'index']);

Route::post('/articles', [\App\Http\Controllers\ArticlesController::class, 'post']);
