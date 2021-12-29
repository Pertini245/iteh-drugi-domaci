<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GradController;
use App\Http\Controllers\KlubController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('grad', GradController::class);
    Route::resource('klub', KlubController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
});
