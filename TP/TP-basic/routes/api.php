<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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
// Route::get('/student',[StudentController::class,'index']);
// Route::post('/student',[StudentController::class,'store']);
// route::get('/student/{id}',[CustomerController::class,'show']);
// route::put('update/{id}',[CustomerController::class,'update']);
// route::delete('delete/{id}',[CustomerController::class,'destroy']);

Route::resource('student',StudentController::class);