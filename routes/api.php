<?php

use App\Http\Controllers\WriterController;
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
Route::get('/writer',[WriterController::class, 'index']);
Route::post('/writer', [WriterController::class,'store']);
Route::get('/writer/{id}',[WriterController::class,'show']);
Route::delete('/writer/{id}',[WriterController::class,'destroy']);
Route::put('/writer/{id}',[WriterController::class,'update']);
