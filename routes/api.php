<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\UserController;
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
// http://127.0.0.1:8000/api/all_user
Route::post('create_user', [UserController::class, 'createUser']);
Route::post('login', [AuthenticationController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(
    function(){
        Route::get('all_user', [UserController::class, 'getAllUser']);
        Route::get('check_password', [UserController::class, 'checkPassword']);

        Route::patch('update_user', [UserController::class, 'updateUser']);
        Route::delete('delete_user', [UserController::class, 'deleteUser']);

        Route::get('favorit',[FavoriteController::class, 'ListFavorit']);
        Route::post('favorit',[FavoriteController::class, 'CreateFavorit']);
        Route::delete('favorit',[FavoriteController::class, 'DeleteFavorit']);
        Route::delete('logout', [AuthenticationController::class, 'logout']);
    
    }
);
