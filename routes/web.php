<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\MyController;

use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::group(['prefix'=>'posts', 'middleware' => ['test', 'auth']], function() {
    Route::get('/', IndexController::class)->name('posts.index');
    Route::get('/{id}', ShowController::class)->name('posts.show');
    Route::patch('/{id}', UpdateController::class)->name('posts.update');

});

Route::get('/hello', [MyController::class, 'hello']);

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/first', [PostController::class, 'getPostByTitle']);

//Route::get('/createPost', [PostController::class, 'create']);

Route::get('/delete', [PostController::class, 'delete']);

Route::get('/firstOrCreate', [PostController::class, 'firstOrCreate']);

Route::get('/updateOrCreate', [PostController::class, 'updateOrCreate']);

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/test', [MyController::class, 'test'])->name('test');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/testResource', [PostController::class, 'testResource']);
