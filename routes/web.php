<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [PostController::class, 'showFirstOnRoot']) ->middleware("auth");

Route::get('/posts', [PostController::class, 'index']);

Route::get("/myPosts", [PostController::class, 'myPosts']) ->name("my_posts") ->middleware('auth');

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/posts/create', [PostController::class, 'create']) ->name('posts.create');

Route::get("/user/register", [LoginController::class, 'register']) ->name('register');

Route::get("/user/login", [LoginController::class, "login"]) -> name("login");

Route::get('/posts/{id}/edit', [PostController::class, 'edit']) -> name('posts.edit');

Route::get('/user/logout', [LoginController::class, "logOut"]) -> name('logout');

Route::Post('/posts/save_post', [PostController::class, 'save']) -> name('posts.save');

Route::post("/login/post", [LoginController::class, "postLogin"]) -> name("post.login");

Route::post("/user/logout", [LoginController::class, 'logout']) ->name('logout');

Route::post("/user/post-register", [LoginController::class, 'postRegister']) ->name('post.register');

Route::put('/posts/{id}/update', [PostController::class, 'update']) -> name('posts.update');

Route::delete('/posts/{id}/delete', [PostController::class, 'delete']) -> name('posts.delete');

Route::resource('posts', PostController::class) ->middleware('auth');


