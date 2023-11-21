<?php

use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;
use App\Models\Writer;

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

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/writer',[WriterController::class,'index']);
Route::get('/writer/{id}',[WriterController::class,'show']);
Route::post('/writer',[WriterController::class,'store']);
Route::delete('/writer/{id}',[WriterController::class,'destroy']);
Route::put('/writer/{id}',[WriterController::class,'update']);*/