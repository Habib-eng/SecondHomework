<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers;
use App\Http\Controllers\EnseignantController;
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
Route::post('/Create',[EnseignantController::class, 'store']);
Route::put('/Update/{id}',[EnseignantController::class, 'update']);
Route::delete('/Delete/{id}',[EnseignantController::class, 'delete']);
Route::get('/Read/{id}',[EnseignantController::class, 'show']);