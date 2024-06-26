<?php

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

Route::prefix('/publisher')->group(function () {
    Route::get('/index', [\App\Http\Controllers\PublisherController::class, 'index']);
    Route::post('/add', [\App\Http\Controllers\PublisherController::class, 'store']); // xem lại chưa đc
    Route::get('edit/{publisher}', [\App\Http\Controllers\PublisherController::class, 'edit']);
//    Route::put('/{id}', [PublisherController::class, 'update']);
//    Route::delete('/{id}', [PublisherController::class, 'destroy']);
});
