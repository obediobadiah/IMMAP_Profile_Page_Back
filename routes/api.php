<?php

use App\Http\Controllers\API\ProfileController;
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

Route::get('/profile-identity', [ProfileController::class, 'GetIdentity']);
Route::get('/profile-experience', [ProfileController::class, 'GetExperience']);

Route::post('/add-profile-experience', [ProfileController::class, 'SaveExperienceEndDate']);
Route::post('/add-profile-identity', [ProfileController::class, 'SaveIdentity']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
