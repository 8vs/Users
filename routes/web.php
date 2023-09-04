<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'home']);
Route::get('/statistic', [UserController::class, 'statistic']);
Route::get('/result/1', [UserController::class, 'result1']);
Route::get('/result/2', [UserController::class, 'result2']);
Route::get('/result/3', [UserController::class, 'result3']);
Route::get('/result/4', [UserController::class, 'result4']);
Route::get('/result/5', [UserController::class, 'result5']);