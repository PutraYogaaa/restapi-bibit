<?php

use App\Http\Controllers\BibitController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bibit', [BibitController::class, 'index']);
Route::post('bibit', [BibitController::class, 'store']);
Route::put('/bibit/{id}', [BibitController::class, 'update']);
Route::delete('/bibit/{id}', [BibitController::class, 'destroy']);