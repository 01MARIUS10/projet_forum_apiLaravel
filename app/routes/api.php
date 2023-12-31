<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UsersController;
use App\Models\UserAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('/auth')->group(function () {
    Route::post('/login', [AuthenticateController::class, 'login'])->name('auth.login');
    Route::post('/signin', [AuthenticateController::class, 'signin'])->name('auth.signin');
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthenticateController::class, 'logout'])->name('auth.logout');

    Route::prefix('/questions')->group(function () {
        Route::get('/', [QuestionController::class, 'index']);
        Route::post('/', [QuestionController::class, 'store']);
        Route::get('/{id}', [QuestionController::class, 'show']);
        Route::post('/{id}', [QuestionController::class, 'update']);
        Route::delete('/{id}', [QuestionController::class, 'destroy']);
    });

    Route::prefix('/messages')->group(function () {
        Route::get('/', [ChatController::class, 'index']);
        Route::post('/', [ChatController::class, 'store']);
        Route::get('/{id}', [ChatController::class, 'show']);
        Route::post('/{id}', [ChatController::class, 'update']);
        Route::delete('/{id}', [ChatController::class, 'destroy']);
    });

    Route::prefix('/profils')->group(function () {
        Route::get('/', [ProfilController::class, 'index']);
        Route::post('/', [ProfilController::class, 'store']);
        Route::get('/{id}', [ProfilController::class, 'show']);
        Route::post('/{id}', [ProfilController::class, 'update']);
        Route::delete('/{id}', [ProfilController::class, 'destroy']);
    });
});
