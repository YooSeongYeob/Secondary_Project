<?php

use App\Http\Controllers\Api\ReservationController;
use App\Http\Controllers\Api\TicketController;

    Route::prefix('v1')->group(function () {
    Route::post('/reservations', [ReservationController::class, 'store'])->name('api.reservations.store');
    Route::get('/tickets/{ticketId}', [TicketController::class, 'show'])->name('api.tickets.show');
    // 다른 API 라우트를 여기에 추가해주세요.
});

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\ReservationController;
// use App\Http\Controllers\ProfileController;

// Route::get('/users', 'UserController@index');
// Route::get('/users/{id}', 'UserController@show');
// Route::post('/users', 'UserController@store');
// Route::put('/users/{id}', 'UserController@update');
// Route::delete('/users/{id}', 'UserController@destroy');
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
