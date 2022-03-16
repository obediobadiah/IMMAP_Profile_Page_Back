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

Route::get('/add-profile-identity', [ProfileController::class, 'SaveIdentity'])->name('add-profile-identity');
Route::post('/add-profile-experience', [ProfileController::class, 'SaveExperienceEndDate']);
Route::post('/add-profile-identity', [ProfileController::class, 'SaveIdentity']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
