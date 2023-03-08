<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
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

Route::get('/', [MhsController::class, 'index']);
Route::post('/store', [MhsController::class, 'store']);
Route::get('/edit/{id}', [MhsController::class, 'edit']);
Route::put('/update/{id}', [MhsController::class, 'update']);
Route::delete('/destroy/{id}', [MhsController::class, 'destroy']);