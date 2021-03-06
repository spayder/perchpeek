<?php

use Illuminate\Http\Request;
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

Route::controller(\App\Http\Controllers\TicketController::class)->group(function () {
   Route::get('tickets/open', 'unprocessed')->name('tickets.unprocessed');
   Route::get('tickets/closed', 'processed')->name('tickets.processed');
   Route::get('stats', 'stats')->name('tickets.stats');
});

Route::get('users/{email}/tickets', [\App\Http\Controllers\UserController::class, 'tickets'])
    ->name('users.tickets');
