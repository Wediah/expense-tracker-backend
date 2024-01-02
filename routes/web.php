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
//
//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post',
//        'my-second-post' => "I'm now getting started"
//    ];
//
//    if (! array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

Route::get('/posts/{post}', [UserController::class, 'show']);
