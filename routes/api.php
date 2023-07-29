<?php

use App\Http\Controllers\Users\GetController;
use App\Http\Controllers\Users\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/users', [PostController::class, '__invoke']);
Route::get('/users', [GetController::class, '__invoke']);
Route::get('/users/{user}', [\App\Http\Controllers\Users\User\GetController::class, '__invoke']);
Route::post('users/{user}/tweets', [\App\Http\Controllers\Users\User\Tweets\PostController::class, '__invoke']);
Route::get('users/{user}/tweets', [\App\Http\Controllers\Users\User\Tweets\GetController::class, '__invoke']);
