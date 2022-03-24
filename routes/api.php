<?php

use App\Http\Controllers\DrzavaController;
use App\Http\Controllers\TeniserController;
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

Route::get('drzava', [DrzavaController::class, 'index']);
Route::get('drzava/{drzava}', [DrzavaController::class, 'show']);
Route::post('drzava', [DrzavaController::class, 'store']);
Route::delete('drzava/{drzava}', [DrzavaController::class, 'destroy']);
Route::get('teniser', [TeniserController::class, 'index']);
Route::get('teniser/{teniser}', [TeniserController::class, 'show']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
