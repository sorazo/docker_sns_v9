<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
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



require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group(function() {

    Route::group([
      'namespace' => 'App\Http\Controllers\Post'
    ], function () {
      Route::get('/top', IndexController::class);
      Route::post('/post', StoreController::class);
      Route::post('/post/{id}', UpdateController::class);
      Route::delete('/post/{id}', DestroyController::class);
    });

    Route::group([
      'namespace' => 'App\Http\Controllers\User'
    ], function () {
      Route::get('/user/{keyword}', IndexController::class);
      Route::get('/user/{id}', ShowController::class);
      Route::get('/user/{id}/edit', EditController::class);
      Route::post('/user/{id}', UpdateController::class);
    });

    Route::group([
      'namespace' => 'App\Http\Controllers\Follow'
    ], function () {
      Route::get('follow/list', FollowListIndexController::class);
      Route::get('follower/list', FollowerListIndexController::class);
      Route::post('/follow/{id}', StoreController::class);
      Route::delete('/follow/{id}', DestroyController::class);
    });
});
